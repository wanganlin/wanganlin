<?php

declare(strict_types=1);

namespace app\bundles\banner\model;

use think\Model;

class BannerPositionModel extends Model
{
    /**
     * 设置表
     */
    protected $name = 'banner_position';

    /**
     * 设置字段
     */
    protected array $field = [
        'id',
        'name',
        'code',
        'description',
        'width',
        'height',
        'created_time',
        'updated_time',
    ];
}
