<?php

declare(strict_types=1);

namespace app\bundles\favorite\model;

use think\Model;

class FavoriteModel extends Model
{
    /**
     * 设置表
     */
    protected $name = 'favorite';

    /**
     * 设置字段
     */
    protected array $field = [
        'id',
        'user_id',
        'favorable_type',
        'favorable_id',
        'created_time',
    ];
}
