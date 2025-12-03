<?php

declare(strict_types=1);

namespace app\bundles\login\request\loginLog;

use OpenApi\Attributes as OA;
use think\Validate;

#[OA\Schema(
    schema: 'LoginLogCreateRequest',
    required: [
        'id',
        'user_id',
        'username',
        'user_type',
        'ip',
        'location',
        'browser',
        'os',
        'login_status',
        'message',
        'created_time',
    ],
    properties: [
        new OA\Property(property: 'id', description: 'ID', type: 'integer'),
        new OA\Property(property: 'user_id', description: '用户ID', type: 'integer'),
        new OA\Property(property: 'username', description: '用户名', type: 'string'),
        new OA\Property(property: 'user_type', description: '用户类型: admin-管理员;user-用户', type: 'string'),
        new OA\Property(property: 'ip', description: 'IP地址', type: 'string'),
        new OA\Property(property: 'location', description: '登录地点', type: 'string'),
        new OA\Property(property: 'browser', description: '浏览器', type: 'string'),
        new OA\Property(property: 'os', description: '操作系统', type: 'string'),
        new OA\Property(property: 'login_status', description: '登录状态: 1-成功;2-失败', type: 'integer'),
        new OA\Property(property: 'message', description: '提示信息', type: 'string'),
        new OA\Property(property: 'created_time', description: '创建时间', type: 'string'),
    ]
)]
class LoginLogCreateRequest extends Validate
{
    protected $rule = [
        'id' => 'require',
        'user_id' => 'require',
        'username' => 'require',
        'user_type' => 'require',
        'ip' => 'require',
        'location' => 'require',
        'browser' => 'require',
        'os' => 'require',
        'login_status' => 'require',
        'message' => 'require',
        'created_time' => 'require',
    ];

    protected $message = [
        'id.require' => '请设置ID',
        'user_id.require' => '请设置用户ID',
        'username.require' => '请设置用户名',
        'user_type.require' => '请设置用户类型: admin-管理员;user-用户',
        'ip.require' => '请设置IP地址',
        'location.require' => '请设置登录地点',
        'browser.require' => '请设置浏览器',
        'os.require' => '请设置操作系统',
        'login_status.require' => '请设置登录状态: 1-成功;2-失败',
        'message.require' => '请设置提示信息',
        'created_time.require' => '请设置创建时间',
    ];
}
