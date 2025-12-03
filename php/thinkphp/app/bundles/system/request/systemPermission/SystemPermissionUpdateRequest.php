<?php

declare(strict_types=1);

namespace app\bundles\system\request\systemPermission;

use OpenApi\Attributes as OA;
use think\Validate;

#[OA\Schema(
    schema: 'SystemPermissionUpdateRequest',
    required: [
        'id',
        'code',
        'name',
        'status',
        'created_time',
        'updated_time',
    ],
    properties: [
        new OA\Property(property: 'id', description: 'ID', type: 'integer'),
        new OA\Property(property: 'code', description: '资源码', type: 'string'),
        new OA\Property(property: 'name', description: '资源名称', type: 'string'),
        new OA\Property(property: 'status', description: '状态: 1-正常;2-禁用', type: 'integer'),
        new OA\Property(property: 'created_time', description: '创建时间', type: 'string'),
        new OA\Property(property: 'updated_time', description: '更新时间', type: 'string'),
    ]
)]
class SystemPermissionUpdateRequest extends Validate
{
    protected $rule = [
        'id' => 'require',
        'code' => 'require',
        'name' => 'require',
        'status' => 'require',
        'created_time' => 'require',
        'updated_time' => 'require',
    ];

    protected $message = [
        'id.require' => '请设置ID',
        'code.require' => '请设置资源码',
        'name.require' => '请设置资源名称',
        'status.require' => '请设置状态: 1-正常;2-禁用',
        'created_time.require' => '请设置创建时间',
        'updated_time.require' => '请设置更新时间',
    ];
}
