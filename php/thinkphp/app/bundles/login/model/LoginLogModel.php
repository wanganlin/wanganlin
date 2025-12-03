<?php

declare(strict_types=1);

namespace app\bundles\login\model;

use think\Model;

class LoginLogModel extends Model
{
    /**
     * 设置表
     */
    protected $name = 'login_log';

    /**
     * 设置字段
     */
    protected array $field = [
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
    ];
}
