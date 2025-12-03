<?php

declare(strict_types=1);

namespace app\bundles\system\model;

use think\Model;

class SystemPermissionModel extends Model
{
    /**
     * 设置表
     */
    protected $name = 'system_permission';

    /**
     * 设置字段
     */
    protected array $field = [
        'id',
        'code',
        'name',
        'status',
        'created_time',
        'updated_time',
    ];
}
