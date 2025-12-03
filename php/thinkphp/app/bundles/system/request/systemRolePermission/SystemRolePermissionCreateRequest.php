<?php

declare(strict_types=1);

namespace app\bundles\system\request\systemRolePermission;

use OpenApi\Attributes as OA;
use think\Validate;

#[OA\Schema(
    schema: 'SystemRolePermissionCreateRequest',
    required: [
        'id',
        'system_role_id',
        'system_permission_id',
        'created_time',
        'updated_time',
    ],
    properties: [
        new OA\Property(property: 'id', description: 'ID', type: 'integer'),
        new OA\Property(property: 'system_role_id', description: '角色ID', type: 'integer'),
        new OA\Property(property: 'system_permission_id', description: '资源ID', type: 'integer'),
        new OA\Property(property: 'created_time', description: '创建时间', type: 'string'),
        new OA\Property(property: 'updated_time', description: '更新时间', type: 'string'),
    ]
)]
class SystemRolePermissionCreateRequest extends Validate
{
    protected $rule = [
        'id' => 'require',
        'system_role_id' => 'require',
        'system_permission_id' => 'require',
        'created_time' => 'require',
        'updated_time' => 'require',
    ];

    protected $message = [
        'id.require' => '请设置ID',
        'system_role_id.require' => '请设置角色ID',
        'system_permission_id.require' => '请设置资源ID',
        'created_time.require' => '请设置创建时间',
        'updated_time.require' => '请设置更新时间',
    ];
}
