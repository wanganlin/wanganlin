<?php

declare(strict_types=1);

namespace app\bundles\like\model;

use think\Model;

class LikeModel extends Model
{
    /**
     * 设置表
     */
    protected $name = 'like';

    /**
     * 设置字段
     */
    protected array $field = [
        'id',
        'user_id',
        'likeable_type',
        'likeable_id',
        'created_time',
    ];
}
