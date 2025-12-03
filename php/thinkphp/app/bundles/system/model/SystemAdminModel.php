<?php

declare(strict_types=1);

namespace app\bundles\system\model;

use think\Model;

class SystemAdminModel extends Model
{
    /**
     * 设置表
     */
    protected $name = 'system_admin';

    /**
     * 设置字段
     */
    protected array $field = [
        'id',
        'username',
        'password',
        'name',
        'avatar',
        'mobile',
        'email',
        'status',
        'deleted',
        'created_time',
        'updated_time',
        'deleted_time',
    ];
}
