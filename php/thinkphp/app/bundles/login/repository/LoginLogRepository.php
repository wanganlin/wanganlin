<?php

declare(strict_types=1);

namespace app\bundles\login\repository;

use app\bundles\login\entity\LoginLogEntity;
use Exception;
use Juling\Foundation\Contract\RepositoryInterface;
use Juling\Foundation\Repository\CurdRepository;
use think\Model;

class LoginLogRepository extends CurdRepository implements RepositoryInterface
{
    private static ?LoginLogRepository $instance = null;

    /**
     * 单例
     */
    public static function getInstance(): LoginLogRepository
    {
        if (is_null(self::$instance)) {
            self::$instance = new LoginLogRepository;
        }

        return self::$instance;
    }

    /**
     * 添加
     */
    public function createByEntity(LoginLogEntity $entity): int
    {
        return $this->create($entity->toEntity());
    }

    /**
     * 按照ID查询返回对象
     */
    public function findOneEntityById(int $id): ?LoginLogEntity
    {
        $data = $this->findOneById($id);
        if (empty($data)) {
            return null;
        }

        $entity = new LoginLogEntity;
        $entity->loadData($data);

        return $entity;
    }

    /**
     * 按照条件查询
     */
    public function findOneEntity(array $condition): ?LoginLogEntity
    {
        $data = $this->findOneByWhere($condition);
        if (empty($data)) {
            return null;
        }

        $entity = new LoginLogEntity;
        $entity->loadData($data);

        return $entity;
    }

    /**
     * 查询列表
     *
     * @throws Exception
     */
    public function findAllEntity(array $condition = []): array
    {
        $result = $this->findAll($condition);
        if (empty($result)) {
            return [];
        }

        foreach ($result as $key => $item) {
            $entity = new LoginLogEntity;
            $entity->loadData($item);
            $result[$key] = $entity;
        }

        return $result;
    }

    /**
     * 分页查询
     *
     * @throws Exception
     */
    public function paginateEntity(array $condition, int $page, int $pageSize): array
    {
        $result = $this->paginate($condition, $page, $pageSize);

        foreach ($result['data'] as $key => $item) {
            $entity = new LoginLogEntity;
            $entity->loadData($item);
            $result['data'][$key] = $entity;
        }

        return $result;
    }

    /**
     * 定义数据数据模型类
     */
    public function model(string $modelName = 'LoginLog'): Model
    {
        $model = '\\app\\bundles\\login\\model\\'.$modelName.'Model';

        return new $model;
    }
}
