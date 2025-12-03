<?php

declare(strict_types=1);

namespace app\bundles\category\model;

use think\Model;

class CategoryModel extends Model
{
    /**
     * 设置表
     */
    protected $name = 'category';

    /**
     * 设置字段
     */
    protected array $field = [
        'id',
        'parent_id',
        'name',
        'slug',
        'description',
        'type',
        'sort',
        'icon',
        'path',
        'status',
        'seo_title',
        'seo_keywords',
        'seo_description',
        'deleted',
        'created_time',
        'updated_time',
        'deleted_time',
    ];
}
