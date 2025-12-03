<?php

declare(strict_types=1);

namespace app\bundles\attachment\controller;

use app\api\admin\controller\BaseController;
use app\bundles\attachment\entity\AttachmentCategoryEntity;
use app\bundles\attachment\request\attachmentCategory\AttachmentCategoryCreateRequest;
use app\bundles\attachment\request\attachmentCategory\AttachmentCategoryQueryRequest;
use app\bundles\attachment\request\attachmentCategory\AttachmentCategoryUpdateRequest;
use app\bundles\attachment\response\attachmentCategory\AttachmentCategoryQueryResponse;
use app\bundles\attachment\response\attachmentCategory\AttachmentCategoryResponse;
use app\bundles\attachment\service\AttachmentCategoryBundleService;
use Juling\Foundation\Exception\CustomException;
use OpenApi\Attributes as OA;
use think\facade\Db as DB;
use think\facade\Log;
use think\Response;
use Throwable;

class AttachmentCategoryController extends BaseController
{
    #[OA\Post(path: '/attachmentCategory/query', summary: '查询列表接口', security: [['bearerAuth' => []]], tags: ['附件分类模块'])]
    #[OA\Parameter(name: 'page', description: '当前页码', in: 'query', required: true, example: 1)]
    #[OA\Parameter(name: 'pageSize', description: '每页分页数', in: 'query', required: false, example: 10)]
    #[OA\RequestBody(required: true, content: new OA\JsonContent(ref: AttachmentCategoryQueryRequest::class))]
    #[OA\Response(response: 200, description: 'OK', content: new OA\JsonContent(ref: AttachmentCategoryQueryResponse::class))]
    public function query(): Response
    {
        try {
            $request = $this->request->get();
            $page = intval($this->request->param('page', 1));
            $pageSize = intval($this->request->param('pageSize', 10));

            $v = new AttachmentCategoryQueryRequest;
            if (! $v->check($request)) {
                throw new CustomException($v->getError());
            }

            $condition = [
                //
            ];

            $attachmentCategoryBundleService = new AttachmentCategoryBundleService;
            $result = $attachmentCategoryBundleService->page($condition, $page, $pageSize);

            foreach ($result['data'] as $key => $item) {
                $response = new AttachmentCategoryResponse;
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

    #[OA\Post(path: '/attachmentCategory/create', summary: '新增接口', security: [['bearerAuth' => []]], tags: ['附件分类模块'])]
    #[OA\RequestBody(required: true, content: new OA\JsonContent(ref: AttachmentCategoryCreateRequest::class))]
    #[OA\Response(response: 200, description: 'OK')]
    public function create(): Response
    {
        DB::startTrans();
        try {
            $request = $this->request->get();

            $v = new AttachmentCategoryCreateRequest;
            if (! $v->check($request)) {
                throw new CustomException($v->getError());
            }

            $attachmentCategoryEntity = new AttachmentCategoryEntity;
            $attachmentCategoryEntity->loadData($request);

            $attachmentCategoryBundleService = new AttachmentCategoryBundleService;
            $insertId = $attachmentCategoryBundleService->save($attachmentCategoryEntity->toEntity());
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

    #[OA\Get(path: '/attachmentCategory/show', summary: '获取详情接口', security: [['bearerAuth' => []]], tags: ['附件分类模块'])]
    #[OA\Parameter(name: 'id', description: 'ID', in: 'query', required: true, example: 1)]
    #[OA\Response(response: 200, description: 'OK', content: new OA\JsonContent(ref: AttachmentCategoryResponse::class))]
    public function show(): Response
    {
        try {
            $id = intval($this->request->param('id', 0));

            $condition = [
                ['id', '=', $id],
            ];

            $attachmentCategoryBundleService = new AttachmentCategoryBundleService;
            $attachmentCategory = $attachmentCategoryBundleService->getOne($condition);

            if (empty($attachmentCategory)) {
                throw new CustomException('数据不存在或状态异常');
            }

            $response = new AttachmentCategoryResponse;
            $response->loadData($attachmentCategory);

            return $this->success($response->toArray());
        } catch (Throwable $e) {
            if ($e instanceof CustomException) {
                return $this->error($e->getMessage());
            }

            Log::error($e);

            return $this->error('获取详情错误');
        }
    }

    #[OA\Put(path: '/attachmentCategory/update', summary: '更新接口', security: [['bearerAuth' => []]], tags: ['附件分类模块'])]
    #[OA\RequestBody(required: true, content: new OA\JsonContent(ref: AttachmentCategoryUpdateRequest::class))]
    #[OA\Response(response: 200, description: 'OK')]
    public function update(): Response
    {
        DB::startTrans();
        try {
            $request = $this->request->get();

            $v = new AttachmentCategoryUpdateRequest;
            if (! $v->check($request)) {
                throw new CustomException($v->getError());
            }

            $attachmentCategoryBundleService = new AttachmentCategoryBundleService;
            $attachmentCategory = $attachmentCategoryBundleService->getById($request['id']);
            if (empty($attachmentCategory)) {
                throw new CustomException('数据不存在或状态异常');
            }

            $attachmentCategoryEntity = new AttachmentCategoryEntity;
            $attachmentCategoryEntity->loadData($request);

            $attachmentCategoryBundleService->update($attachmentCategoryEntity->toEntity(), [
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

    #[OA\Delete(path: '/attachmentCategory/destroy', summary: '删除接口', security: [['bearerAuth' => []]], tags: ['附件分类模块'])]
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

            $attachmentCategoryBundleService = new AttachmentCategoryBundleService;
            if ($attachmentCategoryBundleService->remove($condition)) {
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
