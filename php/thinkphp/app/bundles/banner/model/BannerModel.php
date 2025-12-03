<?php

declare(strict_types=1);

namespace app\bundles\banner\model;

use think\Model;

class BannerModel extends Model
{
    /**
     * 设置表
     */
    protected $name = 'banner';

    /**
     * 设置字段
     */
    protected array $field = [
        'id',
        'position_id',
        'title',
        'image',
        'link',
        'target',
        'start_time',
        'end_time',
        'sort',
        'click_count',
        'status',
        'created_time',
        'updated_time',
    ];
}
