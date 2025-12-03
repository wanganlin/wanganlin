<?php

declare(strict_types=1);

namespace app\bundles\page\model;

use think\Model;

class PageModel extends Model
{
    /**
     * 设置表
     */
    protected $name = 'page';

    /**
     * 设置字段
     */
    protected array $field = [
        'id',
        'title',
        'slug',
        'content',
        'template',
        'keywords',
        'description',
        'view_count',
        'status',
        'sort',
        'created_time',
        'updated_time',
    ];
}
