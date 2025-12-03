<?php

declare(strict_types=1);

namespace app\bundles\like\controller;

use app\api\admin\controller\BaseController;
use app\bundles\like\entity\LikeEntity;
use app\bundles\like\request\like\LikeCreateRequest;
use app\bundles\like\request\like\LikeQueryRequest;
use app\bundles\like\request\like\LikeUpdateRequest;
use app\bundles\like\response\like\LikeQueryResponse;
use app\bundles\like\response\like\LikeResponse;
use app\bundles\like\service\LikeBundleService;
use Juling\Foundation\Exception\CustomException;
use OpenApi\Attributes as OA;
use think\facade\Db as DB;
use think\facade\Log;
use think\Response;
use Throwable;

class LikeController extends BaseController
{
    #[OA\Post(path: '/like/query', summary: '查询列表接口', security: [['bearerAuth' => []]], tags: ['点赞模块'])]
    #[OA\Parameter(name: 'page', description: '当前页码', in: 'query', required: true, example: 1)]
    #[OA\Parameter(name: 'pageSize', description: '每页分页数', in: 'query', required: false, example: 10)]
    #[OA\RequestBody(required: true, content: new OA\JsonContent(ref: LikeQueryRequest::class))]
    #[OA\Response(response: 200, description: 'OK', content: new OA\JsonContent(ref: LikeQueryResponse::class))]
    public function query(): Response
    {
        try {
            $request = $this->request->get();
            $page = intval($this->request->param('page', 1));
            $pageSize = intval($this->request->param('pageSize', 10));

            $v = new LikeQueryRequest;
            if (! $v->check($request)) {
                throw new CustomException($v->getError());
            }

            $condition = [
                //
            ];

            $likeBundleService = new LikeBundleService;
            $result = $likeBundleService->page($condition, $page, $pageSize);

            foreach ($result['data'] as $key => $item) {
                $response = new LikeResponse;
                $response->loadData($item);
                $result['data'][$key] = $response->toArray();
            }

            return $this->success($result);
        } catch (Throwable $e) {
            if ($e instanceof CustomException) {
                return $this->error($e->getMessage());
            }

            Log::error($e);

            return $this->error('查询列表错误');
        }
    }

    #[OA\Post(path: '/like/create', summary: '新增接口', security: [['bearerAuth' => []]], tags: ['点赞模块'])]
    #[OA\RequestBody(required: true, content: new OA\JsonContent(ref: LikeCreateRequest::class))]
    #[OA\Response(response: 200, description: 'OK')]
    public function create(): Response
    {
        DB::startTrans();
        try {
            $request = $this->request->get();

            $v = new LikeCreateRequest;
            if (! $v->check($request)) {
                throw new CustomException($v->getError());
            }

            $likeEntity = new LikeEntity;
            $likeEntity->loadData($request);

            $likeBundleService = new LikeBundleService;
            $insertId = $likeBundleService->save($likeEntity->toEntity());
            if ($insertId > 0) {
                DB::commit();

                return $this->success('新增数据成功');
            }

            throw new CustomException('新增数据失败');
        } catch (Throwable $e) {
            DB::rollback();

            if ($e instanceof CustomException) {
                return $this->error($e->getMessage());
            }

            Log::error($e);

            return $this->error('新增数据错误');
        }
    }

    #[OA\Get(path: '/like/show', summary: '获取详情接口', security: [['bearerAuth' => []]], tags: ['点赞模块'])]
    #[OA\Parameter(name: 'id', description: 'ID', in: 'query', required: true, example: 1)]
    #[OA\Response(response: 200, description: 'OK', content: new OA\JsonContent(ref: LikeResponse::class))]
    public function show(): Response
    {
        try {
            $id = intval($this->request->param('id', 0));

            $condition = [
                ['id', '=', $id],
            ];

            $likeBundleService = new LikeBundleService;
            $like = $likeBundleService->getOne($condition);

            if (empty($like)) {
                throw new CustomException('数据不存在或状态异常');
            }

            $response = new LikeResponse;
            $response->loadData($like);

            return $this->success($response->toArray());
        } catch (Throwable $e) {
            if ($e instanceof CustomException) {
                return $this->error($e->getMessage());
            }

            Log::error($e);

            return $this->error('获取详情错误');
        }
    }

    #[OA\Put(path: '/like/update', summary: '更新接口', security: [['bearerAuth' => []]], tags: ['点赞模块'])]
    #[OA\RequestBody(required: true, content: new OA\JsonContent(ref: LikeUpdateRequest::class))]
    #[OA\Response(response: 200, description: 'OK')]
    public function update(): Response
    {
        DB::startTrans();
        try {
            $request = $this->request->get();

            $v = new LikeUpdateRequest;
            if (! $v->check($request)) {
                throw new CustomException($v->getError());
            }

            $likeBundleService = new LikeBundleService;
            $like = $likeBundleService->getById($request['id']);
            if (empty($like)) {
                throw new CustomException('数据不存在或状态异常');
            }

            $likeEntity = new LikeEntity;
            $likeEntity->loadData($request);

            $likeBundleService->update($likeEntity->toEntity(), [
                ['id', '=', $request['id']],
            ]);

            DB::commit();

            return $this->success('更新数据成功');
        } catch (Throwable $e) {
            DB::rollback();

            if ($e instanceof CustomException) {
                return $this->error($e->getMessage());
            }

            Log::error($e);

            return $this->error('更新数据错误');
        }
    }

    #[OA\Delete(path: '/like/destroy', summary: '删除接口', security: [['bearerAuth' => []]], tags: ['点赞模块'])]
    #[OA\Parameter(name: 'id', description: 'ID', in: 'query', required: true, example: 1)]
    #[OA\Response(response: 200, description: 'OK')]
    public function destroy(): Response
    {
        DB::startTrans();
        try {
            $id = intval($this->request->param('id', 0));

            $condition = [
                ['id', '=', $id],
            ];

            $likeBundleService = new LikeBundleService;
            if ($likeBundleService->remove($condition)) {
                DB::commit();

                return $this->success('删除数据成功');
            }

            throw new CustomException('删除数据失败');
        } catch (Throwable $e) {
            DB::rollback();

            if ($e instanceof CustomException) {
                return $this->error($e->getMessage());
            }

            Log::error($e);

            return $this->error('删除数据错误');
        }
    }
}
