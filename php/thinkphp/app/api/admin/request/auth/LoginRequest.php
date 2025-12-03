<?php

declare(strict_types=1);

namespace app\api\admin\request\auth;

use think\Validate;

class LoginRequest extends Validate
{
    protected $rule = [
        'username' => 'require',
        'password' => 'require',
        'captcha|图片验证码' => 'require|captcha',
        'captchaId' => 'require',
    ];

    protected $message = [
        'username.require' => '登录用户名必须',
        'password.require' => '登录密码必须',
        'captcha.require' => '图片验证码必须',
        'captchaId.require' => '图片验证码ID必须',
    ];
}
