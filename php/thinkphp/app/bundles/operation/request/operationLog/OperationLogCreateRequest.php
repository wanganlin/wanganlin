<?php

declare(strict_types=1);

namespace app\bundles\operation\request\operationLog;

use OpenApi\Attributes as OA;
use think\Validate;

#[OA\Schema(
    schema: 'OperationLogCreateRequest',
    required: [
        'id',
        'user_id',
        'username',
        'module',
        'action',
        'method',
        'url',
        'ip',
        'user_agent',
        'request_data',
        'response_data',
        'execute_time',
        'status',
        'created_time',
    ],
    properties: [
        new OA\Property(property: 'id', description: 'ID', type: 'integer'),
        new OA\Property(property: 'user_id', description: '用户ID', type: 'integer'),
        new OA\Property(property: 'username', description: '用户名', type: 'string'),
        new OA\Property(property: 'module', description: '模块', type: 'string'),
        new OA\Property(property: 'action', description: '操作', type: 'string'),
        new OA\Property(property: 'method', description: '请求方法', type: 'string'),
        new OA\Property(property: 'url', description: '请求URL', type: 'string'),
        new OA\Property(property: 'ip', description: 'IP地址', type: 'string'),
        new OA\Property(property: 'user_agent', description: 'User Agent', type: 'string'),
        new OA\Property(property: 'request_data', description: '请求数据', type: 'string'),
        new OA\Property(property: 'response_data', description: '响应数据', type: 'string'),
        new OA\Property(property: 'execute_time', description: '执行时长(毫秒)', type: 'integer'),
        new OA\Property(property: 'status', description: '状态: 1-成功;2-失败', type: 'integer'),
        new OA\Property(property: 'created_time', description: '创建时间', type: 'string'),
    ]
)]
class OperationLogCreateRequest extends Validate
{
    protected $rule = [
        'id' => 'require',
        'user_id' => 'require',
        'username' => 'require',
        'module' => 'require',
        'action' => 'require',
        'method' => 'require',
        'url' => 'require',
        'ip' => 'require',
        'user_agent' => 'require',
        'request_data' => 'require',
        'response_data' => 'require',
        'execute_time' => 'require',
        'status' => 'require',
        'created_time' => 'require',
    ];

    protected $message = [
        'id.require' => '请设置ID',
        'user_id.require' => '请设置用户ID',
        'username.require' => '请设置用户名',
        'module.require' => '请设置模块',
        'action.require' => '请设置操作',
        'method.require' => '请设置请求方法',
        'url.require' => '请设置请求URL',
        'ip.require' => '请设置IP地址',
        'user_agent.require' => '请设置User Agent',
        'request_data.require' => '请设置请求数据',
        'response_data.require' => '请设置响应数据',
        'execute_time.require' => '请设置执行时长(毫秒)',
        'status.require' => '请设置状态: 1-成功;2-失败',
        'created_time.require' => '请设置创建时间',
    ];
}
