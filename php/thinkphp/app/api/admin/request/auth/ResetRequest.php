<?php

declare(strict_types=1);

namespace app\api\admin\request\auth;

use think\Validate;

class ResetRequest extends Validate
{
    protected $rule = [
        'token' => 'require',
        'password' => 'require',
    ];

    protected $message = [
        'token.require' => '密码重置令牌必须',
        'password.require' => '登录密码必须',
    ];
}
