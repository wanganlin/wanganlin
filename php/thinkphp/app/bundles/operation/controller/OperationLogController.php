<?php

declare(strict_types=1);

namespace app\bundles\operation\controller;

use app\api\admin\controller\BaseController;
use app\bundles\operation\entity\OperationLogEntity;
use app\bundles\operation\request\operationLog\OperationLogCreateRequest;
use app\bundles\operation\request\operationLog\OperationLogQueryRequest;
use app\bundles\operation\request\operationLog\OperationLogUpdateRequest;
use app\bundles\operation\response\operationLog\OperationLogQueryResponse;
use app\bundles\operation\response\operationLog\OperationLogResponse;
use app\bundles\operation\service\OperationLogBundleService;
use Juling\Foundation\Exception\CustomException;
use OpenApi\Attributes as OA;
use think\facade\Db as DB;
use think\facade\Log;
use think\Response;
use Throwable;

class OperationLogController extends BaseController
{
    #[OA\Post(path: '/operationLog/query', summary: '查询列表接口', security: [['bearerAuth' => []]], tags: ['操作日志模块'])]
    #[OA\Parameter(name: 'page', description: '当前页码', in: 'query', required: true, example: 1)]
    #[OA\Parameter(name: 'pageSize', description: '每页分页数', in: 'query', required: false, example: 10)]
    #[OA\RequestBody(required: true, content: new OA\JsonContent(ref: OperationLogQueryRequest::class))]
    #[OA\Response(response: 200, description: 'OK', content: new OA\JsonContent(ref: OperationLogQueryResponse::class))]
    public function query(): Response
    {
        try {
            $request = $this->request->get();
            $page = intval($this->request->param('page', 1));
            $pageSize = intval($this->request->param('pageSize', 10));

            $v = new OperationLogQueryRequest;
            if (! $v->check($request)) {
                throw new CustomException($v->getError());
            }

            $condition = [
                //
            ];

            $operationLogBundleService = new OperationLogBundleService;
            $result = $operationLogBundleService->page($condition, $page, $pageSize);

            foreach ($result['data'] as $key => $item) {
                $response = new OperationLogResponse;
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

    #[OA\Post(path: '/operationLog/create', summary: '新增接口', security: [['bearerAuth' => []]], tags: ['操作日志模块'])]
    #[OA\RequestBody(required: true, content: new OA\JsonContent(ref: OperationLogCreateRequest::class))]
    #[OA\Response(response: 200, description: 'OK')]
    public function create(): Response
    {
        DB::startTrans();
        try {
            $request = $this->request->get();

            $v = new OperationLogCreateRequest;
            if (! $v->check($request)) {
                throw new CustomException($v->getError());
            }

            $operationLogEntity = new OperationLogEntity;
            $operationLogEntity->loadData($request);

            $operationLogBundleService = new OperationLogBundleService;
            $insertId = $operationLogBundleService->save($operationLogEntity->toEntity());
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

    #[OA\Get(path: '/operationLog/show', summary: '获取详情接口', security: [['bearerAuth' => []]], tags: ['操作日志模块'])]
    #[OA\Parameter(name: 'id', description: 'ID', in: 'query', required: true, example: 1)]
    #[OA\Response(response: 200, description: 'OK', content: new OA\JsonContent(ref: OperationLogResponse::class))]
    public function show(): Response
    {
        try {
            $id = intval($this->request->param('id', 0));

            $condition = [
                ['id', '=', $id],
            ];

            $operationLogBundleService = new OperationLogBundleService;
            $operationLog = $operationLogBundleService->getOne($condition);

            if (empty($operationLog)) {
                throw new CustomException('数据不存在或状态异常');
            }

            $response = new OperationLogResponse;
            $response->loadData($operationLog);

            return $this->success($response->toArray());
        } catch (Throwable $e) {
            if ($e instanceof CustomException) {
                return $this->error($e->getMessage());
            }

            Log::error($e);

            return $this->error('获取详情错误');
        }
    }

    #[OA\Put(path: '/operationLog/update', summary: '更新接口', security: [['bearerAuth' => []]], tags: ['操作日志模块'])]
    #[OA\RequestBody(required: true, content: new OA\JsonContent(ref: OperationLogUpdateRequest::class))]
    #[OA\Response(response: 200, description: 'OK')]
    public function update(): Response
    {
        DB::startTrans();
        try {
            $request = $this->request->get();

            $v = new OperationLogUpdateRequest;
            if (! $v->check($request)) {
                throw new CustomException($v->getError());
            }

            $operationLogBundleService = new OperationLogBundleService;
            $operationLog = $operationLogBundleService->getById($request['id']);
            if (empty($operationLog)) {
                throw new CustomException('数据不存在或状态异常');
            }

            $operationLogEntity = new OperationLogEntity;
            $operationLogEntity->loadData($request);

            $operationLogBundleService->update($operationLogEntity->toEntity(), [
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

    #[OA\Delete(path: '/operationLog/destroy', summary: '删除接口', security: [['bearerAuth' => []]], tags: ['操作日志模块'])]
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

            $operationLogBundleService = new OperationLogBundleService;
            if ($operationLogBundleService->remove($condition)) {
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
