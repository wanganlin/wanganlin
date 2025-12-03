<?php

declare(strict_types=1);

namespace app\bundles\setting\model;

use think\Model;

class SettingModel extends Model
{
    /**
     * 设置表
     */
    protected $name = 'setting';

    /**
     * 设置字段
     */
    protected array $field = [
        'id',
        'group',
        'key',
        'value',
        'type',
        'title',
        'description',
        'sort',
        'created_time',
        'updated_time',
    ];
}
