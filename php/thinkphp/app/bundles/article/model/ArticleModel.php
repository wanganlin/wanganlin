<?php

declare(strict_types=1);

namespace app\bundles\article\model;

use think\Model;

class ArticleModel extends Model
{
    /**
     * 设置表
     */
    protected $name = 'article';

    /**
     * 设置字段
     */
    protected array $field = [
        'id',
        'category_id',
        'user_id',
        'title',
        'slug',
        'summary',
        'content',
        'cover_image',
        'images',
        'view_count',
        'like_count',
        'comment_count',
        'is_recommend',
        'is_top',
        'is_hot',
        'publish_status',
        'publish_time',
        'seo_title',
        'seo_keywords',
        'seo_description',
        'sort',
        'template',
        'deleted',
        'created_time',
        'updated_time',
        'deleted_time',
    ];
}
