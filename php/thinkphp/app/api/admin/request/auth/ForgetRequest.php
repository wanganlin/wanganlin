<?php

declare(strict_types=1);

namespace app\api\admin\request\auth;

use think\Validate;

class ForgetRequest extends Validate
{
    protected $rule = [
        'email' => 'require|email',
        'captcha|验证码' => 'require|captcha',
    ];

    protected $message = [
        'email.require' => '电子邮箱地址必须',
        'email.email' => '电子邮箱格式不正确',
        'captcha.require' => '图片验证码必须',
    ];
}
