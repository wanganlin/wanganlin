<?php

declare(strict_types=1);

namespace app\bundles\article\controller;

use app\api\admin\controller\BaseController;
use app\bundles\article\entity\ArticleTagEntity;
use app\bundles\article\request\articleTag\ArticleTagCreateRequest;
use app\bundles\article\request\articleTag\ArticleTagQueryRequest;
use app\bundles\article\request\articleTag\ArticleTagUpdateRequest;
use app\bundles\article\response\articleTag\ArticleTagQueryResponse;
use app\bundles\article\response\articleTag\ArticleTagResponse;
use app\bundles\article\service\ArticleTagBundleService;
use Juling\Foundation\Exception\CustomException;
use OpenApi\Attributes as OA;
use think\facade\Db as DB;
use think\facade\Log;
use think\Response;
use Throwable;

class ArticleTagController extends BaseController
{
    #[OA\Post(path: '/articleTag/query', summary: '查询列表接口', security: [['bearerAuth' => []]], tags: ['文章标签关联模块'])]
    #[OA\Parameter(name: 'page', description: '当前页码', in: 'query', required: true, example: 1)]
    #[OA\Parameter(name: 'pageSize', description: '每页分页数', in: 'query', required: false, example: 10)]
    #[OA\RequestBody(required: true, content: new OA\JsonContent(ref: ArticleTagQueryRequest::class))]
    #[OA\Response(response: 200, description: 'OK', content: new OA\JsonContent(ref: ArticleTagQueryResponse::class))]
    public function query(): Response
    {
        try {
            $request = $this->request->get();
            $page = intval($this->request->param('page', 1));
            $pageSize = intval($this->request->param('pageSize', 10));

            $v = new ArticleTagQueryRequest;
            if (! $v->check($request)) {
                throw new CustomException($v->getError());
            }

            $condition = [
                //
            ];

            $articleTagBundleService = new ArticleTagBundleService;
            $result = $articleTagBundleService->page($condition, $page, $pageSize);

            foreach ($result['data'] as $key => $item) {
                $response = new ArticleTagResponse;
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

    #[OA\Post(path: '/articleTag/create', summary: '新增接口', security: [['bearerAuth' => []]], tags: ['文章标签关联模块'])]
    #[OA\RequestBody(required: true, content: new OA\JsonContent(ref: ArticleTagCreateRequest::class))]
    #[OA\Response(response: 200, description: 'OK')]
    public function create(): Response
    {
        DB::startTrans();
        try {
            $request = $this->request->get();

            $v = new ArticleTagCreateRequest;
            if (! $v->check($request)) {
                throw new CustomException($v->getError());
            }

            $articleTagEntity = new ArticleTagEntity;
            $articleTagEntity->loadData($request);

            $articleTagBundleService = new ArticleTagBundleService;
            $insertId = $articleTagBundleService->save($articleTagEntity->toEntity());
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

    #[OA\Get(path: '/articleTag/show', summary: '获取详情接口', security: [['bearerAuth' => []]], tags: ['文章标签关联模块'])]
    #[OA\Parameter(name: 'id', description: 'ID', in: 'query', required: true, example: 1)]
    #[OA\Response(response: 200, description: 'OK', content: new OA\JsonContent(ref: ArticleTagResponse::class))]
    public function show(): Response
    {
        try {
            $id = intval($this->request->param('id', 0));

            $condition = [
                ['id', '=', $id],
            ];

            $articleTagBundleService = new ArticleTagBundleService;
            $articleTag = $articleTagBundleService->getOne($condition);

            if (empty($articleTag)) {
                throw new CustomException('数据不存在或状态异常');
            }

            $response = new ArticleTagResponse;
            $response->loadData($articleTag);

            return $this->success($response->toArray());
        } catch (Throwable $e) {
            if ($e instanceof CustomException) {
                return $this->error($e->getMessage());
            }

            Log::error($e);

            return $this->error('获取详情错误');
        }
    }

    #[OA\Put(path: '/articleTag/update', summary: '更新接口', security: [['bearerAuth' => []]], tags: ['文章标签关联模块'])]
    #[OA\RequestBody(required: true, content: new OA\JsonContent(ref: ArticleTagUpdateRequest::class))]
    #[OA\Response(response: 200, description: 'OK')]
    public function update(): Response
    {
        DB::startTrans();
        try {
            $request = $this->request->get();

            $v = new ArticleTagUpdateRequest;
            if (! $v->check($request)) {
                throw new CustomException($v->getError());
            }

            $articleTagBundleService = new ArticleTagBundleService;
            $articleTag = $articleTagBundleService->getById($request['id']);
            if (empty($articleTag)) {
                throw new CustomException('数据不存在或状态异常');
            }

            $articleTagEntity = new ArticleTagEntity;
            $articleTagEntity->loadData($request);

            $articleTagBundleService->update($articleTagEntity->toEntity(), [
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

    #[OA\Delete(path: '/articleTag/destroy', summary: '删除接口', security: [['bearerAuth' => []]], tags: ['文章标签关联模块'])]
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

            $articleTagBundleService = new ArticleTagBundleService;
            if ($articleTagBundleService->remove($condition)) {
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
