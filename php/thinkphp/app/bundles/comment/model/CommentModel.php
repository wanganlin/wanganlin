<?php

declare(strict_types=1);

namespace app\bundles\comment\model;

use think\Model;

class CommentModel extends Model
{
    /**
     * 设置表
     */
    protected $name = 'comment';

    /**
     * 设置字段
     */
    protected array $field = [
        'id',
        'parent_id',
        'user_id',
        'commentable_type',
        'commentable_id',
        'content',
        'ip',
        'user_agent',
        'like_count',
        'status',
        'is_top',
        'is_hot',
        'deleted',
        'created_time',
        'updated_time',
        'deleted_time',
    ];
}
