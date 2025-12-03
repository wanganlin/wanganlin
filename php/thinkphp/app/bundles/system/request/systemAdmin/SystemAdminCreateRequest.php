<?php

declare(strict_types=1);

namespace app\bundles\system\request\systemAdmin;

use OpenApi\Attributes as OA;
use think\Validate;

#[OA\Schema(
    schema: 'SystemAdminCreateRequest',
    required: [
        'id',
        'username',
        'password',
        'name',
        'avatar',
        'mobile',
        'email',
        'status',
        'deleted',
        'created_time',
        'updated_time',
        'deleted_time',
    ],
    properties: [
        new OA\Property(property: 'id', description: 'ID', type: 'integer'),
        new OA\Property(property: 'username', description: '用户名', type: 'string'),
        new OA\Property(property: 'password', description: '登录密码', type: 'string'),
        new OA\Property(property: 'name', description: '昵称', type: 'string'),
        new OA\Property(property: 'avatar', description: '头像', type: 'string'),
        new OA\Property(property: 'mobile', description: '手机号码', type: 'string'),
        new OA\Property(property: 'email', description: '电子邮箱', type: 'string'),
        new OA\Property(property: 'status', description: '状态: 1-正常;2-禁用', type: 'integer'),
        new OA\Property(property: 'deleted', description: '删除状态: 0-未删除;1-已删除', type: 'integer'),
        new OA\Property(property: 'created_time', description: '创建时间', type: 'string'),
        new OA\Property(property: 'updated_time', description: '更新时间', type: 'string'),
        new OA\Property(property: 'deleted_time', description: '删除时间', type: 'string'),
    ]
)]
class SystemAdminCreateRequest extends Validate
{
    protected $rule = [
        'id' => 'require',
        'username' => 'require',
        'password' => 'require',
        'name' => 'require',
        'avatar' => 'require',
        'mobile' => 'require',
        'email' => 'require',
        'status' => 'require',
        'deleted' => 'require',
        'created_time' => 'require',
        'updated_time' => 'require',
        'deleted_time' => 'require',
    ];

    protected $message = [
        'id.require' => '请设置ID',
        'username.require' => '请设置用户名',
        'password.require' => '请设置登录密码',
        'name.require' => '请设置昵称',
        'avatar.require' => '请设置头像',
        'mobile.require' => '请设置手机号码',
        'email.require' => '请设置电子邮箱',
        'status.require' => '请设置状态: 1-正常;2-禁用',
        'deleted.require' => '请设置删除状态: 0-未删除;1-已删除',
        'created_time.require' => '请设置创建时间',
        'updated_time.require' => '请设置更新时间',
        'deleted_time.require' => '请设置删除时间',
    ];
}
