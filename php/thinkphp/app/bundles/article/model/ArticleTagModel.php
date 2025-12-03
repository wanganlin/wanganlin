<?php

declare(strict_types=1);

namespace app\bundles\article\model;

use think\Model;

class ArticleTagModel extends Model
{
    /**
     * 设置表
     */
    protected $name = 'article_tag';

    /**
     * 设置字段
     */
    protected array $field = [
        'id',
        'article_id',
        'tag_id',
        'created_time',
    ];
}
