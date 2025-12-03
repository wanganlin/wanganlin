<?php

declare(strict_types=1);

namespace app\bundles\system\request\systemAdminRole;

use OpenApi\Attributes as OA;
use think\Validate;

#[OA\Schema(
    schema: 'SystemAdminRoleCreateRequest',
    required: [
        'id',
        'system_admin_id',
        'system_role_id',
        'created_time',
        'updated_time',
    ],
    properties: [
        new OA\Property(property: 'id', description: 'ID', type: 'integer'),
        new OA\Property(property: 'system_admin_id', description: '管理员ID', type: 'integer'),
        new OA\Property(property: 'system_role_id', description: '角色ID', type: 'integer'),
        new OA\Property(property: 'created_time', description: '创建时间', type: 'string'),
        new OA\Property(property: 'updated_time', description: '更新时间', type: 'string'),
    ]
)]
class SystemAdminRoleCreateRequest extends Validate
{
    protected $rule = [
        'id' => 'require',
        'system_admin_id' => 'require',
        'system_role_id' => 'require',
        'created_time' => 'require',
        'updated_time' => 'require',
    ];

    protected $message = [
        'id.require' => '请设置ID',
        'system_admin_id.require' => '请设置管理员ID',
        'system_role_id.require' => '请设置角色ID',
        'created_time.require' => '请设置创建时间',
        'updated_time.require' => '请设置更新时间',
    ];
}
