<?php

declare(strict_types=1);

namespace app\bundles\user\model;

use think\Model;

class UserModel extends Model
{
    /**
     * 设置表
     */
    protected $name = 'user';

    /**
     * 设置字段
     */
    protected array $field = [
        'id',
        'username',
        'password',
        'nickname',
        'real_name',
        'avatar',
        'mobile',
        'email',
        'gender',
        'birthday',
        'province',
        'city',
        'district',
        'address',
        'id_card',
        'bio',
        'points',
        'balance',
        'level',
        'status',
        'register_ip',
        'last_login_ip',
        'last_login_time',
        'is_verified',
        'email_verified',
        'mobile_verified',
        'openid',
        'unionid',
        'extra_data',
        'deleted',
        'created_time',
        'updated_time',
        'deleted_time',
    ];
}
