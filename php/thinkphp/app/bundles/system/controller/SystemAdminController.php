<?php

declare(strict_types=1);

namespace app\bundles\system\controller;

use app\api\admin\controller\BaseController;
use app\bundles\system\entity\SystemAdminEntity;
use app\bundles\system\request\systemAdmin\SystemAdminCreateRequest;
use app\bundles\system\request\systemAdmin\SystemAdminQueryRequest;
use app\bundles\system\request\systemAdmin\SystemAdminUpdateRequest;
use app\bundles\system\response\systemAdmin\SystemAdminQueryResponse;
use app\bundles\system\response\systemAdmin\SystemAdminResponse;
use app\bundles\system\service\SystemAdminBundleService;
use Juling\Foundation\Exception\CustomException;
use OpenApi\Attributes as OA;
use think\facade\Db as DB;
use think\facade\Log;
use think\Response;
use Throwable;

class SystemAdminController extends BaseController
{
    #[OA\Post(path: '/systemAdmin/query', summary: '查询列表接口', security: [['bearerAuth' => []]], tags: ['系统管理员模块'])]
    #[OA\Parameter(name: 'page', description: '当前页码', in: 'query', required: true, example: 1)]
    #[OA\Parameter(name: 'pageSize', description: '每页分页数', in: 'query', required: false, example: 10)]
    #[OA\RequestBody(required: true, content: new OA\JsonContent(ref: SystemAdminQueryRequest::class))]
    #[OA\Response(response: 200, description: 'OK', content: new OA\JsonContent(ref: SystemAdminQueryResponse::class))]
    public function query(): Response
    {
        try {
            $request = $this->request->get();
            $page = intval($this->request->param('page', 1));
            $pageSize = intval($this->request->param('pageSize', 10));

            $v = new SystemAdminQueryRequest;
            if (! $v->check($request)) {
                throw new CustomException($v->getError());
            }

            $condition = [
                //
            ];

            $systemAdminBundleService = new SystemAdminBundleService;
            $result = $systemAdminBundleService->page($condition, $page, $pageSize);

            foreach ($result['data'] as $key => $item) {
                $response = new SystemAdminResponse;
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

    #[OA\Post(path: '/systemAdmin/create', summary: '新增接口', security: [['bearerAuth' => []]], tags: ['系统管理员模块'])]
    #[OA\RequestBody(required: true, content: new OA\JsonContent(ref: SystemAdminCreateRequest::class))]
    #[OA\Response(response: 200, description: 'OK')]
    public function create(): Response
    {
        DB::startTrans();
        try {
            $request = $this->request->get();

            $v = new SystemAdminCreateRequest;
            if (! $v->check($request)) {
                throw new CustomException($v->getError());
            }

            $systemAdminEntity = new SystemAdminEntity;
            $systemAdminEntity->loadData($request);

            $systemAdminBundleService = new SystemAdminBundleService;
            $insertId = $systemAdminBundleService->save($systemAdminEntity->toEntity());
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

    #[OA\Get(path: '/systemAdmin/show', summary: '获取详情接口', security: [['bearerAuth' => []]], tags: ['系统管理员模块'])]
    #[OA\Parameter(name: 'id', description: 'ID', in: 'query', required: true, example: 1)]
    #[OA\Response(response: 200, description: 'OK', content: new OA\JsonContent(ref: SystemAdminResponse::class))]
    public function show(): Response
    {
        try {
            $id = intval($this->request->param('id', 0));

            $condition = [
                ['id', '=', $id],
            ];

            $systemAdminBundleService = new SystemAdminBundleService;
            $systemAdmin = $systemAdminBundleService->getOne($condition);

            if (empty($systemAdmin)) {
                throw new CustomException('数据不存在或状态异常');
            }

            $response = new SystemAdminResponse;
            $response->loadData($systemAdmin);

            return $this->success($response->toArray());
        } catch (Throwable $e) {
            if ($e instanceof CustomException) {
                return $this->error($e->getMessage());
            }

            Log::error($e);

            return $this->error('获取详情错误');
        }
    }

    #[OA\Put(path: '/systemAdmin/update', summary: '更新接口', security: [['bearerAuth' => []]], tags: ['系统管理员模块'])]
    #[OA\RequestBody(required: true, content: new OA\JsonContent(ref: SystemAdminUpdateRequest::class))]
    #[OA\Response(response: 200, description: 'OK')]
    public function update(): Response
    {
        DB::startTrans();
        try {
            $request = $this->request->get();

            $v = new SystemAdminUpdateRequest;
            if (! $v->check($request)) {
                throw new CustomException($v->getError());
            }

            $systemAdminBundleService = new SystemAdminBundleService;
            $systemAdmin = $systemAdminBundleService->getById($request['id']);
            if (empty($systemAdmin)) {
                throw new CustomException('数据不存在或状态异常');
            }

            $systemAdminEntity = new SystemAdminEntity;
            $systemAdminEntity->loadData($request);

            $systemAdminBundleService->update($systemAdminEntity->toEntity(), [
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

    #[OA\Delete(path: '/systemAdmin/destroy', summary: '删除接口', security: [['bearerAuth' => []]], tags: ['系统管理员模块'])]
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

            $systemAdminBundleService = new SystemAdminBundleService;
            if ($systemAdminBundleService->remove($condition)) {
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
