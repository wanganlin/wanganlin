<?php

declare(strict_types=1);

namespace app\bundles\dict\model;

use think\Model;

class DictModel extends Model
{
    /**
     * 设置表
     */
    protected $name = 'dict';

    /**
     * 设置字段
     */
    protected array $field = [
        'id',
        'parent_id',
        'dict_type',
        'dict_label',
        'dict_value',
        'sort',
        'status',
        'remark',
        'created_time',
        'updated_time',
    ];
}
