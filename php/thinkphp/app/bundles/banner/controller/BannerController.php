<?php

declare(strict_types=1);

namespace app\bundles\banner\controller;

use app\api\admin\controller\BaseController;
use app\bundles\banner\entity\BannerEntity;
use app\bundles\banner\request\banner\BannerCreateRequest;
use app\bundles\banner\request\banner\BannerQueryRequest;
use app\bundles\banner\request\banner\BannerUpdateRequest;
use app\bundles\banner\response\banner\BannerQueryResponse;
use app\bundles\banner\response\banner\BannerResponse;
use app\bundles\banner\service\BannerBundleService;
use Juling\Foundation\Exception\CustomException;
use OpenApi\Attributes as OA;
use think\facade\Db as DB;
use think\facade\Log;
use think\Response;
use Throwable;

class BannerController extends BaseController
{
    #[OA\Post(path: '/banner/query', summary: '查询列表接口', security: [['bearerAuth' => []]], tags: ['广告/轮播模块'])]
    #[OA\Parameter(name: 'page', description: '当前页码', in: 'query', required: true, example: 1)]
    #[OA\Parameter(name: 'pageSize', description: '每页分页数', in: 'query', required: false, example: 10)]
    #[OA\RequestBody(required: true, content: new OA\JsonContent(ref: BannerQueryRequest::class))]
    #[OA\Response(response: 200, description: 'OK', content: new OA\JsonContent(ref: BannerQueryResponse::class))]
    public function query(): Response
    {
        try {
            $request = $this->request->get();
            $page = intval($this->request->param('page', 1));
            $pageSize = intval($this->request->param('pageSize', 10));

            $v = new BannerQueryRequest;
            if (! $v->check($request)) {
                throw new CustomException($v->getError());
            }

            $condition = [
                //
            ];

            $bannerBundleService = new BannerBundleService;
            $result = $bannerBundleService->page($condition, $page, $pageSize);

            foreach ($result['data'] as $key => $item) {
                $response = new BannerResponse;
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

    #[OA\Post(path: '/banner/create', summary: '新增接口', security: [['bearerAuth' => []]], tags: ['广告/轮播模块'])]
    #[OA\RequestBody(required: true, content: new OA\JsonContent(ref: BannerCreateRequest::class))]
    #[OA\Response(response: 200, description: 'OK')]
    public function create(): Response
    {
        DB::startTrans();
        try {
            $request = $this->request->get();

            $v = new BannerCreateRequest;
            if (! $v->check($request)) {
                throw new CustomException($v->getError());
            }

            $bannerEntity = new BannerEntity;
            $bannerEntity->loadData($request);

            $bannerBundleService = new BannerBundleService;
            $insertId = $bannerBundleService->save($bannerEntity->toEntity());
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

    #[OA\Get(path: '/banner/show', summary: '获取详情接口', security: [['bearerAuth' => []]], tags: ['广告/轮播模块'])]
    #[OA\Parameter(name: 'id', description: 'ID', in: 'query', required: true, example: 1)]
    #[OA\Response(response: 200, description: 'OK', content: new OA\JsonContent(ref: BannerResponse::class))]
    public function show(): Response
    {
        try {
            $id = intval($this->request->param('id', 0));

            $condition = [
                ['id', '=', $id],
            ];

            $bannerBundleService = new BannerBundleService;
            $banner = $bannerBundleService->getOne($condition);

            if (empty($banner)) {
                throw new CustomException('数据不存在或状态异常');
            }

            $response = new BannerResponse;
            $response->loadData($banner);

            return $this->success($response->toArray());
        } catch (Throwable $e) {
            if ($e instanceof CustomException) {
                return $this->error($e->getMessage());
            }

            Log::error($e);

            return $this->error('获取详情错误');
        }
    }

    #[OA\Put(path: '/banner/update', summary: '更新接口', security: [['bearerAuth' => []]], tags: ['广告/轮播模块'])]
    #[OA\RequestBody(required: true, content: new OA\JsonContent(ref: BannerUpdateRequest::class))]
    #[OA\Response(response: 200, description: 'OK')]
    public function update(): Response
    {
        DB::startTrans();
        try {
            $request = $this->request->get();

            $v = new BannerUpdateRequest;
            if (! $v->check($request)) {
                throw new CustomException($v->getError());
            }

            $bannerBundleService = new BannerBundleService;
            $banner = $bannerBundleService->getById($request['id']);
            if (empty($banner)) {
                throw new CustomException('数据不存在或状态异常');
            }

            $bannerEntity = new BannerEntity;
            $bannerEntity->loadData($request);

            $bannerBundleService->update($bannerEntity->toEntity(), [
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

    #[OA\Delete(path: '/banner/destroy', summary: '删除接口', security: [['bearerAuth' => []]], tags: ['广告/轮播模块'])]
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

            $bannerBundleService = new BannerBundleService;
            if ($bannerBundleService->remove($condition)) {
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
