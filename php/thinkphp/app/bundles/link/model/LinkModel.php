<?php

declare(strict_types=1);

namespace app\bundles\link\model;

use think\Model;

class LinkModel extends Model
{
    /**
     * 设置表
     */
    protected $name = 'link';

    /**
     * 设置字段
     */
    protected array $field = [
        'id',
        'category_id',
        'title',
        'url',
        'logo',
        'description',
        'rating',
        'sort',
        'target',
        'nofollow',
        'status',
        'created_time',
        'updated_time',
    ];
}
