<?php

declare(strict_types=1);

namespace app\bundles\system\controller;

use app\api\admin\controller\BaseController;
use app\bundles\system\entity\SystemAdminRoleEntity;
use app\bundles\system\request\systemAdminRole\SystemAdminRoleCreateRequest;
use app\bundles\system\request\systemAdminRole\SystemAdminRoleQueryRequest;
use app\bundles\system\request\systemAdminRole\SystemAdminRoleUpdateRequest;
use app\bundles\system\response\systemAdminRole\SystemAdminRoleQueryResponse;
use app\bundles\system\response\systemAdminRole\SystemAdminRoleResponse;
use app\bundles\system\service\SystemAdminRoleBundleService;
use Juling\Foundation\Exception\CustomException;
use OpenApi\Attributes as OA;
use think\facade\Db as DB;
use think\facade\Log;
use think\Response;
use Throwable;

class SystemAdminRoleController extends BaseController
{
    #[OA\Post(path: '/systemAdminRole/query', summary: '查询列表接口', security: [['bearerAuth' => []]], tags: ['系统管理员角色关系模块'])]
    #[OA\Parameter(name: 'page', description: '当前页码', in: 'query', required: true, example: 1)]
    #[OA\Parameter(name: 'pageSize', description: '每页分页数', in: 'query', required: false, example: 10)]
    #[OA\RequestBody(required: true, content: new OA\JsonContent(ref: SystemAdminRoleQueryRequest::class))]
    #[OA\Response(response: 200, description: 'OK', content: new OA\JsonContent(ref: SystemAdminRoleQueryResponse::class))]
    public function query(): Response
    {
        try {
            $request = $this->request->get();
            $page = intval($this->request->param('page', 1));
            $pageSize = intval($this->request->param('pageSize', 10));

            $v = new SystemAdminRoleQueryRequest;
            if (! $v->check($request)) {
                throw new CustomException($v->getError());
            }

            $condition = [
                //
            ];

            $systemAdminRoleBundleService = new SystemAdminRoleBundleService;
            $result = $systemAdminRoleBundleService->page($condition, $page, $pageSize);

            foreach ($result['data'] as $key => $item) {
                $response = new SystemAdminRoleResponse;
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

    #[OA\Post(path: '/systemAdminRole/create', summary: '新增接口', security: [['bearerAuth' => []]], tags: ['系统管理员角色关系模块'])]
    #[OA\RequestBody(required: true, content: new OA\JsonContent(ref: SystemAdminRoleCreateRequest::class))]
    #[OA\Response(response: 200, description: 'OK')]
    public function create(): Response
    {
        DB::startTrans();
        try {
            $request = $this->request->get();

            $v = new SystemAdminRoleCreateRequest;
            if (! $v->check($request)) {
                throw new CustomException($v->getError());
            }

            $systemAdminRoleEntity = new SystemAdminRoleEntity;
            $systemAdminRoleEntity->loadData($request);

            $systemAdminRoleBundleService = new SystemAdminRoleBundleService;
            $insertId = $systemAdminRoleBundleService->save($systemAdminRoleEntity->toEntity());
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

    #[OA\Get(path: '/systemAdminRole/show', summary: '获取详情接口', security: [['bearerAuth' => []]], tags: ['系统管理员角色关系模块'])]
    #[OA\Parameter(name: 'id', description: 'ID', in: 'query', required: true, example: 1)]
    #[OA\Response(response: 200, description: 'OK', content: new OA\JsonContent(ref: SystemAdminRoleResponse::class))]
    public function show(): Response
    {
        try {
            $id = intval($this->request->param('id', 0));

            $condition = [
                ['id', '=', $id],
            ];

            $systemAdminRoleBundleService = new SystemAdminRoleBundleService;
            $systemAdminRole = $systemAdminRoleBundleService->getOne($condition);

            if (empty($systemAdminRole)) {
                throw new CustomException('数据不存在或状态异常');
            }

            $response = new SystemAdminRoleResponse;
            $response->loadData($systemAdminRole);

            return $this->success($response->toArray());
        } catch (Throwable $e) {
            if ($e instanceof CustomException) {
                return $this->error($e->getMessage());
            }

            Log::error($e);

            return $this->error('获取详情错误');
        }
    }

    #[OA\Put(path: '/systemAdminRole/update', summary: '更新接口', security: [['bearerAuth' => []]], tags: ['系统管理员角色关系模块'])]
    #[OA\RequestBody(required: true, content: new OA\JsonContent(ref: SystemAdminRoleUpdateRequest::class))]
    #[OA\Response(response: 200, description: 'OK')]
    public function update(): Response
    {
        DB::startTrans();
        try {
            $request = $this->request->get();

            $v = new SystemAdminRoleUpdateRequest;
            if (! $v->check($request)) {
                throw new CustomException($v->getError());
            }

            $systemAdminRoleBundleService = new SystemAdminRoleBundleService;
            $systemAdminRole = $systemAdminRoleBundleService->getById($request['id']);
            if (empty($systemAdminRole)) {
                throw new CustomException('数据不存在或状态异常');
            }

            $systemAdminRoleEntity = new SystemAdminRoleEntity;
            $systemAdminRoleEntity->loadData($request);

            $systemAdminRoleBundleService->update($systemAdminRoleEntity->toEntity(), [
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

    #[OA\Delete(path: '/systemAdminRole/destroy', summary: '删除接口', security: [['bearerAuth' => []]], tags: ['系统管理员角色关系模块'])]
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

            $systemAdminRoleBundleService = new SystemAdminRoleBundleService;
            if ($systemAdminRoleBundleService->remove($condition)) {
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
