<?php

declare(strict_types=1);

namespace app\bundles\tag\request\tag;

use OpenApi\Attributes as OA;
use think\Validate;

#[OA\Schema(
    schema: 'TagUpdateRequest',
    required: [
        'id',
        'name',
        'slug',
        'description',
        'use_count',
        'color',
        'status',
        'created_time',
        'updated_time',
    ],
    properties: [
        new OA\Property(property: 'id', description: 'ID', type: 'integer'),
        new OA\Property(property: 'name', description: '标签名称', type: 'string'),
        new OA\Property(property: 'slug', description: '标签别名', type: 'string'),
        new OA\Property(property: 'description', description: '标签描述', type: 'string'),
        new OA\Property(property: 'use_count', description: '使用次数', type: 'integer'),
        new OA\Property(property: 'color', description: '标签颜色', type: 'string'),
        new OA\Property(property: 'status', description: '状态: 1-正常;2-禁用', type: 'integer'),
        new OA\Property(property: 'created_time', description: '创建时间', type: 'string'),
        new OA\Property(property: 'updated_time', description: '更新时间', type: 'string'),
    ]
)]
class TagUpdateRequest extends Validate
{
    protected $rule = [
        'id' => 'require',
        'name' => 'require',
        'slug' => 'require',
        'description' => 'require',
        'use_count' => 'require',
        'color' => 'require',
        'status' => 'require',
        'created_time' => 'require',
        'updated_time' => 'require',
    ];

    protected $message = [
        'id.require' => '请设置ID',
        'name.require' => '请设置标签名称',
        'slug.require' => '请设置标签别名',
        'description.require' => '请设置标签描述',
        'use_count.require' => '请设置使用次数',
        'color.require' => '请设置标签颜色',
        'status.require' => '请设置状态: 1-正常;2-禁用',
        'created_time.require' => '请设置创建时间',
        'updated_time.require' => '请设置更新时间',
    ];
}
