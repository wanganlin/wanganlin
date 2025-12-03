<?php

declare(strict_types=1);

namespace app\bundles\setting\controller;

use app\api\admin\controller\BaseController;
use app\bundles\setting\entity\SettingEntity;
use app\bundles\setting\request\setting\SettingCreateRequest;
use app\bundles\setting\request\setting\SettingQueryRequest;
use app\bundles\setting\request\setting\SettingUpdateRequest;
use app\bundles\setting\response\setting\SettingQueryResponse;
use app\bundles\setting\response\setting\SettingResponse;
use app\bundles\setting\service\SettingBundleService;
use Juling\Foundation\Exception\CustomException;
use OpenApi\Attributes as OA;
use think\facade\Db as DB;
use think\facade\Log;
use think\Response;
use Throwable;

class SettingController extends BaseController
{
    #[OA\Post(path: '/setting/query', summary: '查询列表接口', security: [['bearerAuth' => []]], tags: ['系统配置模块'])]
    #[OA\Parameter(name: 'page', description: '当前页码', in: 'query', required: true, example: 1)]
    #[OA\Parameter(name: 'pageSize', description: '每页分页数', in: 'query', required: false, example: 10)]
    #[OA\RequestBody(required: true, content: new OA\JsonContent(ref: SettingQueryRequest::class))]
    #[OA\Response(response: 200, description: 'OK', content: new OA\JsonContent(ref: SettingQueryResponse::class))]
    public function query(): Response
    {
        try {
            $request = $this->request->get();
            $page = intval($this->request->param('page', 1));
            $pageSize = intval($this->request->param('pageSize', 10));

            $v = new SettingQueryRequest;
            if (! $v->check($request)) {
                throw new CustomException($v->getError());
            }

            $condition = [
                //
            ];

            $settingBundleService = new SettingBundleService;
            $result = $settingBundleService->page($condition, $page, $pageSize);

            foreach ($result['data'] as $key => $item) {
                $response = new SettingResponse;
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

    #[OA\Post(path: '/setting/create', summary: '新增接口', security: [['bearerAuth' => []]], tags: ['系统配置模块'])]
    #[OA\RequestBody(required: true, content: new OA\JsonContent(ref: SettingCreateRequest::class))]
    #[OA\Response(response: 200, description: 'OK')]
    public function create(): Response
    {
        DB::startTrans();
        try {
            $request = $this->request->get();

            $v = new SettingCreateRequest;
            if (! $v->check($request)) {
                throw new CustomException($v->getError());
            }

            $settingEntity = new SettingEntity;
            $settingEntity->loadData($request);

            $settingBundleService = new SettingBundleService;
            $insertId = $settingBundleService->save($settingEntity->toEntity());
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

    #[OA\Get(path: '/setting/show', summary: '获取详情接口', security: [['bearerAuth' => []]], tags: ['系统配置模块'])]
    #[OA\Parameter(name: 'id', description: 'ID', in: 'query', required: true, example: 1)]
    #[OA\Response(response: 200, description: 'OK', content: new OA\JsonContent(ref: SettingResponse::class))]
    public function show(): Response
    {
        try {
            $id = intval($this->request->param('id', 0));

            $condition = [
                ['id', '=', $id],
            ];

            $settingBundleService = new SettingBundleService;
            $setting = $settingBundleService->getOne($condition);

            if (empty($setting)) {
                throw new CustomException('数据不存在或状态异常');
            }

            $response = new SettingResponse;
            $response->loadData($setting);

            return $this->success($response->toArray());
        } catch (Throwable $e) {
            if ($e instanceof CustomException) {
                return $this->error($e->getMessage());
            }

            Log::error($e);

            return $this->error('获取详情错误');
        }
    }

    #[OA\Put(path: '/setting/update', summary: '更新接口', security: [['bearerAuth' => []]], tags: ['系统配置模块'])]
    #[OA\RequestBody(required: true, content: new OA\JsonContent(ref: SettingUpdateRequest::class))]
    #[OA\Response(response: 200, description: 'OK')]
    public function update(): Response
    {
        DB::startTrans();
        try {
            $request = $this->request->get();

            $v = new SettingUpdateRequest;
            if (! $v->check($request)) {
                throw new CustomException($v->getError());
            }

            $settingBundleService = new SettingBundleService;
            $setting = $settingBundleService->getById($request['id']);
            if (empty($setting)) {
                throw new CustomException('数据不存在或状态异常');
            }

            $settingEntity = new SettingEntity;
            $settingEntity->loadData($request);

            $settingBundleService->update($settingEntity->toEntity(), [
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

    #[OA\Delete(path: '/setting/destroy', summary: '删除接口', security: [['bearerAuth' => []]], tags: ['系统配置模块'])]
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

            $settingBundleService = new SettingBundleService;
            if ($settingBundleService->remove($condition)) {
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
