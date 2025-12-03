<?php

declare(strict_types=1);

namespace app\bundles\navigation\model;

use think\Model;

class NavigationModel extends Model
{
    /**
     * 设置表
     */
    protected $name = 'navigation';

    /**
     * 设置字段
     */
    protected array $field = [
        'id',
        'parent_id',
        'position',
        'title',
        'url',
        'icon',
        'target',
        'sort',
        'status',
        'created_time',
        'updated_time',
    ];
}
