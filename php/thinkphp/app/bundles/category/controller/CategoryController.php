<?php

declare(strict_types=1);

namespace app\bundles\category\controller;

use app\api\admin\controller\BaseController;
use app\bundles\category\entity\CategoryEntity;
use app\bundles\category\request\category\CategoryCreateRequest;
use app\bundles\category\request\category\CategoryQueryRequest;
use app\bundles\category\request\category\CategoryUpdateRequest;
use app\bundles\category\response\category\CategoryQueryResponse;
use app\bundles\category\response\category\CategoryResponse;
use app\bundles\category\service\CategoryBundleService;
use Juling\Foundation\Exception\CustomException;
use OpenApi\Attributes as OA;
use think\facade\Db as DB;
use think\facade\Log;
use think\Response;
use Throwable;

class CategoryController extends BaseController
{
    #[OA\Post(path: '/category/query', summary: '查询列表接口', security: [['bearerAuth' => []]], tags: ['内容分类模块'])]
    #[OA\Parameter(name: 'page', description: '当前页码', in: 'query', required: true, example: 1)]
    #[OA\Parameter(name: 'pageSize', description: '每页分页数', in: 'query', required: false, example: 10)]
    #[OA\RequestBody(required: true, content: new OA\JsonContent(ref: CategoryQueryRequest::class))]
    #[OA\Response(response: 200, description: 'OK', content: new OA\JsonContent(ref: CategoryQueryResponse::class))]
    public function query(): Response
    {
        try {
            $request = $this->request->get();
            $page = intval($this->request->param('page', 1));
            $pageSize = intval($this->request->param('pageSize', 10));

            $v = new CategoryQueryRequest;
            if (! $v->check($request)) {
                throw new CustomException($v->getError());
            }

            $condition = [
                //
            ];

            $categoryBundleService = new CategoryBundleService;
            $result = $categoryBundleService->page($condition, $page, $pageSize);

            foreach ($result['data'] as $key => $item) {
                $response = new CategoryResponse;
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

    #[OA\Post(path: '/category/create', summary: '新增接口', security: [['bearerAuth' => []]], tags: ['内容分类模块'])]
    #[OA\RequestBody(required: true, content: new OA\JsonContent(ref: CategoryCreateRequest::class))]
    #[OA\Response(response: 200, description: 'OK')]
    public function create(): Response
    {
        DB::startTrans();
        try {
            $request = $this->request->get();

            $v = new CategoryCreateRequest;
            if (! $v->check($request)) {
                throw new CustomException($v->getError());
            }

            $categoryEntity = new CategoryEntity;
            $categoryEntity->loadData($request);

            $categoryBundleService = new CategoryBundleService;
            $insertId = $categoryBundleService->save($categoryEntity->toEntity());
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

    #[OA\Get(path: '/category/show', summary: '获取详情接口', security: [['bearerAuth' => []]], tags: ['内容分类模块'])]
    #[OA\Parameter(name: 'id', description: 'ID', in: 'query', required: true, example: 1)]
    #[OA\Response(response: 200, description: 'OK', content: new OA\JsonContent(ref: CategoryResponse::class))]
    public function show(): Response
    {
        try {
            $id = intval($this->request->param('id', 0));

            $condition = [
                ['id', '=', $id],
            ];

            $categoryBundleService = new CategoryBundleService;
            $category = $categoryBundleService->getOne($condition);

            if (empty($category)) {
                throw new CustomException('数据不存在或状态异常');
            }

            $response = new CategoryResponse;
            $response->loadData($category);

            return $this->success($response->toArray());
        } catch (Throwable $e) {
            if ($e instanceof CustomException) {
                return $this->error($e->getMessage());
            }

            Log::error($e);

            return $this->error('获取详情错误');
        }
    }

    #[OA\Put(path: '/category/update', summary: '更新接口', security: [['bearerAuth' => []]], tags: ['内容分类模块'])]
    #[OA\RequestBody(required: true, content: new OA\JsonContent(ref: CategoryUpdateRequest::class))]
    #[OA\Response(response: 200, description: 'OK')]
    public function update(): Response
    {
        DB::startTrans();
        try {
            $request = $this->request->get();

            $v = new CategoryUpdateRequest;
            if (! $v->check($request)) {
                throw new CustomException($v->getError());
            }

            $categoryBundleService = new CategoryBundleService;
            $category = $categoryBundleService->getById($request['id']);
            if (empty($category)) {
                throw new CustomException('数据不存在或状态异常');
            }

            $categoryEntity = new CategoryEntity;
            $categoryEntity->loadData($request);

            $categoryBundleService->update($categoryEntity->toEntity(), [
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

    #[OA\Delete(path: '/category/destroy', summary: '删除接口', security: [['bearerAuth' => []]], tags: ['内容分类模块'])]
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

            $categoryBundleService = new CategoryBundleService;
            if ($categoryBundleService->remove($condition)) {
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
