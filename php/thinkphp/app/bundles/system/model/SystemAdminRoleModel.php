<?php

declare(strict_types=1);

namespace app\bundles\system\model;

use think\Model;

class SystemAdminRoleModel extends Model
{
    /**
     * 设置表
     */
    protected $name = 'system_admin_role';

    /**
     * 设置字段
     */
    protected array $field = [
        'id',
        'system_admin_id',
        'system_role_id',
        'created_time',
        'updated_time',
    ];
}
