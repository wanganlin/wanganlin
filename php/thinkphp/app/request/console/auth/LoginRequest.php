<?php

declare(strict_types=1);

namespace app\request\console\auth;

use think\Validate;

class LoginRequest extends Validate
{
    /**
     * @var array
     */
    protected $rule = [
        'username' => 'require',
        'password' => 'require',
        'captcha|图片验证码' => 'require|captcha',
    ];

    /**
     * @var array
     */
    protected $message = [
        'username.require' => '登录用户名必须',
        'password.require' => '登录密码必须',
        'captcha.require' => '图片验证码必须',
    ];
}
