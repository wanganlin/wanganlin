<?php

declare(strict_types=1);

namespace app\bundles\system\model;

use think\Model;

class SystemRolePermissionModel extends Model
{
    /**
     * 设置表
     */
    protected $name = 'system_role_permission';

    /**
     * 设置字段
     */
    protected array $field = [
        'id',
        'system_role_id',
        'system_permission_id',
        'created_time',
        'updated_time',
    ];
}
