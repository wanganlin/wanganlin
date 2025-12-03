<?php

declare(strict_types=1);

namespace app\bundles\favorite\controller;

use app\api\admin\controller\BaseController;
use app\bundles\favorite\entity\FavoriteEntity;
use app\bundles\favorite\request\favorite\FavoriteCreateRequest;
use app\bundles\favorite\request\favorite\FavoriteQueryRequest;
use app\bundles\favorite\request\favorite\FavoriteUpdateRequest;
use app\bundles\favorite\response\favorite\FavoriteQueryResponse;
use app\bundles\favorite\response\favorite\FavoriteResponse;
use app\bundles\favorite\service\FavoriteBundleService;
use Juling\Foundation\Exception\CustomException;
use OpenApi\Attributes as OA;
use think\facade\Db as DB;
use think\facade\Log;
use think\Response;
use Throwable;

class FavoriteController extends BaseController
{
    #[OA\Post(path: '/favorite/query', summary: '查询列表接口', security: [['bearerAuth' => []]], tags: ['收藏模块'])]
    #[OA\Parameter(name: 'page', description: '当前页码', in: 'query', required: true, example: 1)]
    #[OA\Parameter(name: 'pageSize', description: '每页分页数', in: 'query', required: false, example: 10)]
    #[OA\RequestBody(required: true, content: new OA\JsonContent(ref: FavoriteQueryRequest::class))]
    #[OA\Response(response: 200, description: 'OK', content: new OA\JsonContent(ref: FavoriteQueryResponse::class))]
    public function query(): Response
    {
        try {
            $request = $this->request->get();
            $page = intval($this->request->param('page', 1));
            $pageSize = intval($this->request->param('pageSize', 10));

            $v = new FavoriteQueryRequest;
            if (! $v->check($request)) {
                throw new CustomException($v->getError());
            }

            $condition = [
                //
            ];

            $favoriteBundleService = new FavoriteBundleService;
            $result = $favoriteBundleService->page($condition, $page, $pageSize);

            foreach ($result['data'] as $key => $item) {
                $response = new FavoriteResponse;
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

    #[OA\Post(path: '/favorite/create', summary: '新增接口', security: [['bearerAuth' => []]], tags: ['收藏模块'])]
    #[OA\RequestBody(required: true, content: new OA\JsonContent(ref: FavoriteCreateRequest::class))]
    #[OA\Response(response: 200, description: 'OK')]
    public function create(): Response
    {
        DB::startTrans();
        try {
            $request = $this->request->get();

            $v = new FavoriteCreateRequest;
            if (! $v->check($request)) {
                throw new CustomException($v->getError());
            }

            $favoriteEntity = new FavoriteEntity;
            $favoriteEntity->loadData($request);

            $favoriteBundleService = new FavoriteBundleService;
            $insertId = $favoriteBundleService->save($favoriteEntity->toEntity());
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

    #[OA\Get(path: '/favorite/show', summary: '获取详情接口', security: [['bearerAuth' => []]], tags: ['收藏模块'])]
    #[OA\Parameter(name: 'id', description: 'ID', in: 'query', required: true, example: 1)]
    #[OA\Response(response: 200, description: 'OK', content: new OA\JsonContent(ref: FavoriteResponse::class))]
    public function show(): Response
    {
        try {
            $id = intval($this->request->param('id', 0));

            $condition = [
                ['id', '=', $id],
            ];

            $favoriteBundleService = new FavoriteBundleService;
            $favorite = $favoriteBundleService->getOne($condition);

            if (empty($favorite)) {
                throw new CustomException('数据不存在或状态异常');
            }

            $response = new FavoriteResponse;
            $response->loadData($favorite);

            return $this->success($response->toArray());
        } catch (Throwable $e) {
            if ($e instanceof CustomException) {
                return $this->error($e->getMessage());
            }

            Log::error($e);

            return $this->error('获取详情错误');
        }
    }

    #[OA\Put(path: '/favorite/update', summary: '更新接口', security: [['bearerAuth' => []]], tags: ['收藏模块'])]
    #[OA\RequestBody(required: true, content: new OA\JsonContent(ref: FavoriteUpdateRequest::class))]
    #[OA\Response(response: 200, description: 'OK')]
    public function update(): Response
    {
        DB::startTrans();
        try {
            $request = $this->request->get();

            $v = new FavoriteUpdateRequest;
            if (! $v->check($request)) {
                throw new CustomException($v->getError());
            }

            $favoriteBundleService = new FavoriteBundleService;
            $favorite = $favoriteBundleService->getById($request['id']);
            if (empty($favorite)) {
                throw new CustomException('数据不存在或状态异常');
            }

            $favoriteEntity = new FavoriteEntity;
            $favoriteEntity->loadData($request);

            $favoriteBundleService->update($favoriteEntity->toEntity(), [
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

    #[OA\Delete(path: '/favorite/destroy', summary: '删除接口', security: [['bearerAuth' => []]], tags: ['收藏模块'])]
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

            $favoriteBundleService = new FavoriteBundleService;
            if ($favoriteBundleService->remove($condition)) {
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
