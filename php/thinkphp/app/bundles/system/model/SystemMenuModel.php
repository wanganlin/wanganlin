<?php

declare(strict_types=1);

namespace app\bundles\system\model;

use think\Model;

class SystemMenuModel extends Model
{
    /**
     * 设置表
     */
    protected $name = 'system_menu';

    /**
     * 设置字段
     */
    protected array $field = [
        'id',
        'parent_id',
        'name',
        'icon',
        'description',
        'sort',
        'status',
        'created_time',
        'updated_time',
    ];
}
