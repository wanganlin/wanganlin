<?php

declare(strict_types=1);

namespace app\bundles\navigation\controller;

use app\api\admin\controller\BaseController;
use app\bundles\navigation\entity\NavigationEntity;
use app\bundles\navigation\request\navigation\NavigationCreateRequest;
use app\bundles\navigation\request\navigation\NavigationQueryRequest;
use app\bundles\navigation\request\navigation\NavigationUpdateRequest;
use app\bundles\navigation\response\navigation\NavigationQueryResponse;
use app\bundles\navigation\response\navigation\NavigationResponse;
use app\bundles\navigation\service\NavigationBundleService;
use Juling\Foundation\Exception\CustomException;
use OpenApi\Attributes as OA;
use think\facade\Db as DB;
use think\facade\Log;
use think\Response;
use Throwable;

class NavigationController extends BaseController
{
    #[OA\Post(path: '/navigation/query', summary: '查询列表接口', security: [['bearerAuth' => []]], tags: ['导航模块'])]
    #[OA\Parameter(name: 'page', description: '当前页码', in: 'query', required: true, example: 1)]
    #[OA\Parameter(name: 'pageSize', description: '每页分页数', in: 'query', required: false, example: 10)]
    #[OA\RequestBody(required: true, content: new OA\JsonContent(ref: NavigationQueryRequest::class))]
    #[OA\Response(response: 200, description: 'OK', content: new OA\JsonContent(ref: NavigationQueryResponse::class))]
    public function query(): Response
    {
        try {
            $request = $this->request->get();
            $page = intval($this->request->param('page', 1));
            $pageSize = intval($this->request->param('pageSize', 10));

            $v = new NavigationQueryRequest;
            if (! $v->check($request)) {
                throw new CustomException($v->getError());
            }

            $condition = [
                //
            ];

            $navigationBundleService = new NavigationBundleService;
            $result = $navigationBundleService->page($condition, $page, $pageSize);

            foreach ($result['data'] as $key => $item) {
                $response = new NavigationResponse;
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

    #[OA\Post(path: '/navigation/create', summary: '新增接口', security: [['bearerAuth' => []]], tags: ['导航模块'])]
    #[OA\RequestBody(required: true, content: new OA\JsonContent(ref: NavigationCreateRequest::class))]
    #[OA\Response(response: 200, description: 'OK')]
    public function create(): Response
    {
        DB::startTrans();
        try {
            $request = $this->request->get();

            $v = new NavigationCreateRequest;
            if (! $v->check($request)) {
                throw new CustomException($v->getError());
            }

            $navigationEntity = new NavigationEntity;
            $navigationEntity->loadData($request);

            $navigationBundleService = new NavigationBundleService;
            $insertId = $navigationBundleService->save($navigationEntity->toEntity());
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

    #[OA\Get(path: '/navigation/show', summary: '获取详情接口', security: [['bearerAuth' => []]], tags: ['导航模块'])]
    #[OA\Parameter(name: 'id', description: 'ID', in: 'query', required: true, example: 1)]
    #[OA\Response(response: 200, description: 'OK', content: new OA\JsonContent(ref: NavigationResponse::class))]
    public function show(): Response
    {
        try {
            $id = intval($this->request->param('id', 0));

            $condition = [
                ['id', '=', $id],
            ];

            $navigationBundleService = new NavigationBundleService;
            $navigation = $navigationBundleService->getOne($condition);

            if (empty($navigation)) {
                throw new CustomException('数据不存在或状态异常');
            }

            $response = new NavigationResponse;
            $response->loadData($navigation);

            return $this->success($response->toArray());
        } catch (Throwable $e) {
            if ($e instanceof CustomException) {
                return $this->error($e->getMessage());
            }

            Log::error($e);

            return $this->error('获取详情错误');
        }
    }

    #[OA\Put(path: '/navigation/update', summary: '更新接口', security: [['bearerAuth' => []]], tags: ['导航模块'])]
    #[OA\RequestBody(required: true, content: new OA\JsonContent(ref: NavigationUpdateRequest::class))]
    #[OA\Response(response: 200, description: 'OK')]
    public function update(): Response
    {
        DB::startTrans();
        try {
            $request = $this->request->get();

            $v = new NavigationUpdateRequest;
            if (! $v->check($request)) {
                throw new CustomException($v->getError());
            }

            $navigationBundleService = new NavigationBundleService;
            $navigation = $navigationBundleService->getById($request['id']);
            if (empty($navigation)) {
                throw new CustomException('数据不存在或状态异常');
            }

            $navigationEntity = new NavigationEntity;
            $navigationEntity->loadData($request);

            $navigationBundleService->update($navigationEntity->toEntity(), [
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

    #[OA\Delete(path: '/navigation/destroy', summary: '删除接口', security: [['bearerAuth' => []]], tags: ['导航模块'])]
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

            $navigationBundleService = new NavigationBundleService;
            if ($navigationBundleService->remove($condition)) {
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
