<?php

declare(strict_types=1);

namespace app\bundles\attachment\controller;

use app\api\admin\controller\BaseController;
use app\bundles\attachment\entity\AttachmentEntity;
use app\bundles\attachment\request\attachment\AttachmentCreateRequest;
use app\bundles\attachment\request\attachment\AttachmentQueryRequest;
use app\bundles\attachment\request\attachment\AttachmentUpdateRequest;
use app\bundles\attachment\response\attachment\AttachmentQueryResponse;
use app\bundles\attachment\response\attachment\AttachmentResponse;
use app\bundles\attachment\service\AttachmentBundleService;
use Juling\Foundation\Exception\CustomException;
use OpenApi\Attributes as OA;
use think\facade\Db as DB;
use think\facade\Log;
use think\Response;
use Throwable;

class AttachmentController extends BaseController
{
    #[OA\Post(path: '/attachment/query', summary: '查询列表接口', security: [['bearerAuth' => []]], tags: ['附件模块'])]
    #[OA\Parameter(name: 'page', description: '当前页码', in: 'query', required: true, example: 1)]
    #[OA\Parameter(name: 'pageSize', description: '每页分页数', in: 'query', required: false, example: 10)]
    #[OA\RequestBody(required: true, content: new OA\JsonContent(ref: AttachmentQueryRequest::class))]
    #[OA\Response(response: 200, description: 'OK', content: new OA\JsonContent(ref: AttachmentQueryResponse::class))]
    public function query(): Response
    {
        try {
            $request = $this->request->get();
            $page = intval($this->request->param('page', 1));
            $pageSize = intval($this->request->param('pageSize', 10));

            $v = new AttachmentQueryRequest;
            if (! $v->check($request)) {
                throw new CustomException($v->getError());
            }

            $condition = [
                //
            ];

            $attachmentBundleService = new AttachmentBundleService;
            $result = $attachmentBundleService->page($condition, $page, $pageSize);

            foreach ($result['data'] as $key => $item) {
                $response = new AttachmentResponse;
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

    #[OA\Post(path: '/attachment/create', summary: '新增接口', security: [['bearerAuth' => []]], tags: ['附件模块'])]
    #[OA\RequestBody(required: true, content: new OA\JsonContent(ref: AttachmentCreateRequest::class))]
    #[OA\Response(response: 200, description: 'OK')]
    public function create(): Response
    {
        DB::startTrans();
        try {
            $request = $this->request->get();

            $v = new AttachmentCreateRequest;
            if (! $v->check($request)) {
                throw new CustomException($v->getError());
            }

            $attachmentEntity = new AttachmentEntity;
            $attachmentEntity->loadData($request);

            $attachmentBundleService = new AttachmentBundleService;
            $insertId = $attachmentBundleService->save($attachmentEntity->toEntity());
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

    #[OA\Get(path: '/attachment/show', summary: '获取详情接口', security: [['bearerAuth' => []]], tags: ['附件模块'])]
    #[OA\Parameter(name: 'id', description: 'ID', in: 'query', required: true, example: 1)]
    #[OA\Response(response: 200, description: 'OK', content: new OA\JsonContent(ref: AttachmentResponse::class))]
    public function show(): Response
    {
        try {
            $id = intval($this->request->param('id', 0));

            $condition = [
                ['id', '=', $id],
            ];

            $attachmentBundleService = new AttachmentBundleService;
            $attachment = $attachmentBundleService->getOne($condition);

            if (empty($attachment)) {
                throw new CustomException('数据不存在或状态异常');
            }

            $response = new AttachmentResponse;
            $response->loadData($attachment);

            return $this->success($response->toArray());
        } catch (Throwable $e) {
            if ($e instanceof CustomException) {
                return $this->error($e->getMessage());
            }

            Log::error($e);

            return $this->error('获取详情错误');
        }
    }

    #[OA\Put(path: '/attachment/update', summary: '更新接口', security: [['bearerAuth' => []]], tags: ['附件模块'])]
    #[OA\RequestBody(required: true, content: new OA\JsonContent(ref: AttachmentUpdateRequest::class))]
    #[OA\Response(response: 200, description: 'OK')]
    public function update(): Response
    {
        DB::startTrans();
        try {
            $request = $this->request->get();

            $v = new AttachmentUpdateRequest;
            if (! $v->check($request)) {
                throw new CustomException($v->getError());
            }

            $attachmentBundleService = new AttachmentBundleService;
            $attachment = $attachmentBundleService->getById($request['id']);
            if (empty($attachment)) {
                throw new CustomException('数据不存在或状态异常');
            }

            $attachmentEntity = new AttachmentEntity;
            $attachmentEntity->loadData($request);

            $attachmentBundleService->update($attachmentEntity->toEntity(), [
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

    #[OA\Delete(path: '/attachment/destroy', summary: '删除接口', security: [['bearerAuth' => []]], tags: ['附件模块'])]
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

            $attachmentBundleService = new AttachmentBundleService;
            if ($attachmentBundleService->remove($condition)) {
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
