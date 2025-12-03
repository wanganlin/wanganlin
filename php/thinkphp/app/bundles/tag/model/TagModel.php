<?php

declare(strict_types=1);

namespace app\bundles\tag\model;

use think\Model;

class TagModel extends Model
{
    /**
     * 设置表
     */
    protected $name = 'tag';

    /**
     * 设置字段
     */
    protected array $field = [
        'id',
        'name',
        'slug',
        'description',
        'use_count',
        'color',
        'status',
        'created_time',
        'updated_time',
    ];
}
