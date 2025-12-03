<?php

declare(strict_types=1);

namespace app\bundles\system\request\systemRole;

use OpenApi\Attributes as OA;
use think\Validate;

#[OA\Schema(
    schema: 'SystemRoleUpdateRequest',
    required: [
        'id',
        'code',
        'name',
        'description',
        'status',
        'deleted',
        'created_time',
        'updated_time',
        'deleted_time',
    ],
    properties: [
        new OA\Property(property: 'id', description: 'ID', type: 'integer'),
        new OA\Property(property: 'code', description: '角色码', type: 'string'),
        new OA\Property(property: 'name', description: '角色名称', type: 'string'),
        new OA\Property(property: 'description', description: '角色描述', type: 'string'),
        new OA\Property(property: 'status', description: '状态: 1-正常;2-禁用', type: 'integer'),
        new OA\Property(property: 'deleted', description: '删除状态: 0-未删除;1-已删除', type: 'integer'),
        new OA\Property(property: 'created_time', description: '创建时间', type: 'string'),
        new OA\Property(property: 'updated_time', description: '更新时间', type: 'string'),
        new OA\Property(property: 'deleted_time', description: '删除时间', type: 'string'),
    ]
)]
class SystemRoleUpdateRequest extends Validate
{
    protected $rule = [
        'id' => 'require',
        'code' => 'require',
        'name' => 'require',
        'description' => 'require',
        'status' => 'require',
        'deleted' => 'require',
        'created_time' => 'require',
        'updated_time' => 'require',
        'deleted_time' => 'require',
    ];

    protected $message = [
        'id.require' => '请设置ID',
        'code.require' => '请设置角色码',
        'name.require' => '请设置角色名称',
        'description.require' => '请设置角色描述',
        'status.require' => '请设置状态: 1-正常;2-禁用',
        'deleted.require' => '请设置删除状态: 0-未删除;1-已删除',
        'created_time.require' => '请设置创建时间',
        'updated_time.require' => '请设置更新时间',
        'deleted_time.require' => '请设置删除时间',
    ];
}
