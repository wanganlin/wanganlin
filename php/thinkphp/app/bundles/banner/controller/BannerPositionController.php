<?php

declare(strict_types=1);

namespace app\bundles\banner\controller;

use app\api\admin\controller\BaseController;
use app\bundles\banner\entity\BannerPositionEntity;
use app\bundles\banner\request\bannerPosition\BannerPositionCreateRequest;
use app\bundles\banner\request\bannerPosition\BannerPositionQueryRequest;
use app\bundles\banner\request\bannerPosition\BannerPositionUpdateRequest;
use app\bundles\banner\response\bannerPosition\BannerPositionQueryResponse;
use app\bundles\banner\response\bannerPosition\BannerPositionResponse;
use app\bundles\banner\service\BannerPositionBundleService;
use Juling\Foundation\Exception\CustomException;
use OpenApi\Attributes as OA;
use think\facade\Db as DB;
use think\facade\Log;
use think\Response;
use Throwable;

class BannerPositionController extends BaseController
{
    #[OA\Post(path: '/bannerPosition/query', summary: '查询列表接口', security: [['bearerAuth' => []]], tags: ['广告位模块'])]
    #[OA\Parameter(name: 'page', description: '当前页码', in: 'query', required: true, example: 1)]
    #[OA\Parameter(name: 'pageSize', description: '每页分页数', in: 'query', required: false, example: 10)]
    #[OA\RequestBody(required: true, content: new OA\JsonContent(ref: BannerPositionQueryRequest::class))]
    #[OA\Response(response: 200, description: 'OK', content: new OA\JsonContent(ref: BannerPositionQueryResponse::class))]
    public function query(): Response
    {
        try {
            $request = $this->request->get();
            $page = intval($this->request->param('page', 1));
            $pageSize = intval($this->request->param('pageSize', 10));

            $v = new BannerPositionQueryRequest;
            if (! $v->check($request)) {
                throw new CustomException($v->getError());
            }

            $condition = [
                //
            ];

            $bannerPositionBundleService = new BannerPositionBundleService;
            $result = $bannerPositionBundleService->page($condition, $page, $pageSize);

            foreach ($result['data'] as $key => $item) {
                $response = new BannerPositionResponse;
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

    #[OA\Post(path: '/bannerPosition/create', summary: '新增接口', security: [['bearerAuth' => []]], tags: ['广告位模块'])]
    #[OA\RequestBody(required: true, content: new OA\JsonContent(ref: BannerPositionCreateRequest::class))]
    #[OA\Response(response: 200, description: 'OK')]
    public function create(): Response
    {
        DB::startTrans();
        try {
            $request = $this->request->get();

            $v = new BannerPositionCreateRequest;
            if (! $v->check($request)) {
                throw new CustomException($v->getError());
            }

            $bannerPositionEntity = new BannerPositionEntity;
            $bannerPositionEntity->loadData($request);

            $bannerPositionBundleService = new BannerPositionBundleService;
            $insertId = $bannerPositionBundleService->save($bannerPositionEntity->toEntity());
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

    #[OA\Get(path: '/bannerPosition/show', summary: '获取详情接口', security: [['bearerAuth' => []]], tags: ['广告位模块'])]
    #[OA\Parameter(name: 'id', description: 'ID', in: 'query', required: true, example: 1)]
    #[OA\Response(response: 200, description: 'OK', content: new OA\JsonContent(ref: BannerPositionResponse::class))]
    public function show(): Response
    {
        try {
            $id = intval($this->request->param('id', 0));

            $condition = [
                ['id', '=', $id],
            ];

            $bannerPositionBundleService = new BannerPositionBundleService;
            $bannerPosition = $bannerPositionBundleService->getOne($condition);

            if (empty($bannerPosition)) {
                throw new CustomException('数据不存在或状态异常');
            }

            $response = new BannerPositionResponse;
            $response->loadData($bannerPosition);

            return $this->success($response->toArray());
        } catch (Throwable $e) {
            if ($e instanceof CustomException) {
                return $this->error($e->getMessage());
            }

            Log::error($e);

            return $this->error('获取详情错误');
        }
    }

    #[OA\Put(path: '/bannerPosition/update', summary: '更新接口', security: [['bearerAuth' => []]], tags: ['广告位模块'])]
    #[OA\RequestBody(required: true, content: new OA\JsonContent(ref: BannerPositionUpdateRequest::class))]
    #[OA\Response(response: 200, description: 'OK')]
    public function update(): Response
    {
        DB::startTrans();
        try {
            $request = $this->request->get();

            $v = new BannerPositionUpdateRequest;
            if (! $v->check($request)) {
                throw new CustomException($v->getError());
            }

            $bannerPositionBundleService = new BannerPositionBundleService;
            $bannerPosition = $bannerPositionBundleService->getById($request['id']);
            if (empty($bannerPosition)) {
                throw new CustomException('数据不存在或状态异常');
            }

            $bannerPositionEntity = new BannerPositionEntity;
            $bannerPositionEntity->loadData($request);

            $bannerPositionBundleService->update($bannerPositionEntity->toEntity(), [
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

    #[OA\Delete(path: '/bannerPosition/destroy', summary: '删除接口', security: [['bearerAuth' => []]], tags: ['广告位模块'])]
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

            $bannerPositionBundleService = new BannerPositionBundleService;
            if ($bannerPositionBundleService->remove($condition)) {
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
