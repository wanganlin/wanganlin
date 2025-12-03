<?php

declare(strict_types=1);

namespace app\bundles\operation\model;

use think\Model;

class OperationLogModel extends Model
{
    /**
     * 设置表
     */
    protected $name = 'operation_log';

    /**
     * 设置字段
     */
    protected array $field = [
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
    ];
}
