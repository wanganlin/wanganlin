<?php

declare(strict_types=1);

namespace app\bundles\dict\request\dict;

use OpenApi\Attributes as OA;
use think\Validate;

#[OA\Schema(
    schema: 'DictUpdateRequest',
    required: [
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
    ],
    properties: [
        new OA\Property(property: 'id', description: 'ID', type: 'integer'),
        new OA\Property(property: 'parent_id', description: '父字典ID', type: 'integer'),
        new OA\Property(property: 'dict_type', description: '字典类型', type: 'string'),
        new OA\Property(property: 'dict_label', description: '字典标签', type: 'string'),
        new OA\Property(property: 'dict_value', description: '字典值', type: 'string'),
        new OA\Property(property: 'sort', description: '排序', type: 'integer'),
        new OA\Property(property: 'status', description: '状态: 1-正常;2-禁用', type: 'integer'),
        new OA\Property(property: 'remark', description: '备注', type: 'string'),
        new OA\Property(property: 'created_time', description: '创建时间', type: 'string'),
        new OA\Property(property: 'updated_time', description: '更新时间', type: 'string'),
    ]
)]
class DictUpdateRequest extends Validate
{
    protected $rule = [
        'id' => 'require',
        'parent_id' => 'require',
        'dict_type' => 'require',
        'dict_label' => 'require',
        'dict_value' => 'require',
        'sort' => 'require',
        'status' => 'require',
        'remark' => 'require',
        'created_time' => 'require',
        'updated_time' => 'require',
    ];

    protected $message = [
        'id.require' => '请设置ID',
        'parent_id.require' => '请设置父字典ID',
        'dict_type.require' => '请设置字典类型',
        'dict_label.require' => '请设置字典标签',
        'dict_value.require' => '请设置字典值',
        'sort.require' => '请设置排序',
        'status.require' => '请设置状态: 1-正常;2-禁用',
        'remark.require' => '请设置备注',
        'created_time.require' => '请设置创建时间',
        'updated_time.require' => '请设置更新时间',
    ];
}
