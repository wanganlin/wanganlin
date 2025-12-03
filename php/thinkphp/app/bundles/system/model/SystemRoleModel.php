<?php

declare(strict_types=1);

namespace app\bundles\system\model;

use think\Model;

class SystemRoleModel extends Model
{
    /**
     * 设置表
     */
    protected $name = 'system_role';

    /**
     * 设置字段
     */
    protected array $field = [
        'id',
        'code',
        'name',
        'description',
        'status',
        'deleted',
        'created_time',
        'updated_time',
        'deleted_time',
    ];
}
