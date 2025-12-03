<?php

declare(strict_types=1);

namespace app\bundles\notification\controller;

use app\api\admin\controller\BaseController;
use app\bundles\notification\entity\NotificationEntity;
use app\bundles\notification\request\notification\NotificationCreateRequest;
use app\bundles\notification\request\notification\NotificationQueryRequest;
use app\bundles\notification\request\notification\NotificationUpdateRequest;
use app\bundles\notification\response\notification\NotificationQueryResponse;
use app\bundles\notification\response\notification\NotificationResponse;
use app\bundles\notification\service\NotificationBundleService;
use Juling\Foundation\Exception\CustomException;
use OpenApi\Attributes as OA;
use think\facade\Db as DB;
use think\facade\Log;
use think\Response;
use Throwable;

class NotificationController extends BaseController
{
    #[OA\Post(path: '/notification/query', summary: '查询列表接口', security: [['bearerAuth' => []]], tags: ['通知模块'])]
    #[OA\Parameter(name: 'page', description: '当前页码', in: 'query', required: true, example: 1)]
    #[OA\Parameter(name: 'pageSize', description: '每页分页数', in: 'query', required: false, example: 10)]
    #[OA\RequestBody(required: true, content: new OA\JsonContent(ref: NotificationQueryRequest::class))]
    #[OA\Response(response: 200, description: 'OK', content: new OA\JsonContent(ref: NotificationQueryResponse::class))]
    public function query(): Response
    {
        try {
            $request = $this->request->get();
            $page = intval($this->request->param('page', 1));
            $pageSize = intval($this->request->param('pageSize', 10));

            $v = new NotificationQueryRequest;
            if (! $v->check($request)) {
                throw new CustomException($v->getError());
            }

            $condition = [
                //
            ];

            $notificationBundleService = new NotificationBundleService;
            $result = $notificationBundleService->page($condition, $page, $pageSize);

            foreach ($result['data'] as $key => $item) {
                $response = new NotificationResponse;
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

    #[OA\Post(path: '/notification/create', summary: '新增接口', security: [['bearerAuth' => []]], tags: ['通知模块'])]
    #[OA\RequestBody(required: true, content: new OA\JsonContent(ref: NotificationCreateRequest::class))]
    #[OA\Response(response: 200, description: 'OK')]
    public function create(): Response
    {
        DB::startTrans();
        try {
            $request = $this->request->get();

            $v = new NotificationCreateRequest;
            if (! $v->check($request)) {
                throw new CustomException($v->getError());
            }

            $notificationEntity = new NotificationEntity;
            $notificationEntity->loadData($request);

            $notificationBundleService = new NotificationBundleService;
            $insertId = $notificationBundleService->save($notificationEntity->toEntity());
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

    #[OA\Get(path: '/notification/show', summary: '获取详情接口', security: [['bearerAuth' => []]], tags: ['通知模块'])]
    #[OA\Parameter(name: 'id', description: 'ID', in: 'query', required: true, example: 1)]
    #[OA\Response(response: 200, description: 'OK', content: new OA\JsonContent(ref: NotificationResponse::class))]
    public function show(): Response
    {
        try {
            $id = intval($this->request->param('id', 0));

            $condition = [
                ['id', '=', $id],
            ];

            $notificationBundleService = new NotificationBundleService;
            $notification = $notificationBundleService->getOne($condition);

            if (empty($notification)) {
                throw new CustomException('数据不存在或状态异常');
            }

            $response = new NotificationResponse;
            $response->loadData($notification);

            return $this->success($response->toArray());
        } catch (Throwable $e) {
            if ($e instanceof CustomException) {
                return $this->error($e->getMessage());
            }

            Log::error($e);

            return $this->error('获取详情错误');
        }
    }

    #[OA\Put(path: '/notification/update', summary: '更新接口', security: [['bearerAuth' => []]], tags: ['通知模块'])]
    #[OA\RequestBody(required: true, content: new OA\JsonContent(ref: NotificationUpdateRequest::class))]
    #[OA\Response(response: 200, description: 'OK')]
    public function update(): Response
    {
        DB::startTrans();
        try {
            $request = $this->request->get();

            $v = new NotificationUpdateRequest;
            if (! $v->check($request)) {
                throw new CustomException($v->getError());
            }

            $notificationBundleService = new NotificationBundleService;
            $notification = $notificationBundleService->getById($request['id']);
            if (empty($notification)) {
                throw new CustomException('数据不存在或状态异常');
            }

            $notificationEntity = new NotificationEntity;
            $notificationEntity->loadData($request);

            $notificationBundleService->update($notificationEntity->toEntity(), [
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

    #[OA\Delete(path: '/notification/destroy', summary: '删除接口', security: [['bearerAuth' => []]], tags: ['通知模块'])]
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

            $notificationBundleService = new NotificationBundleService;
            if ($notificationBundleService->remove($condition)) {
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
