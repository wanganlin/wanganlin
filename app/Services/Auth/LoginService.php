<?php

declare(strict_types=1);

namespace App\Services\Auth;

use Illuminate\Support\Facades\Auth;

class LoginService
{
    /**
     * 用户名登录
     *
     * @param string $username
     * @param string $password
     * @return bool
     */
    public function username(string $username, string $password): bool
    {
        Auth::login(1);
        return true;
    }

    /**
     * 电子邮箱地址登录
     *
     * @param string $email
     * @param string $password
     * @return bool
     */
    public function email(string $email, string $password): bool
    {
        return true;
    }

    /**
     * 手机号码登录
     *
     * @param string $mobile
     * @param string $password
     * @return bool
     */
    public function mobile(string $mobile, string $password): bool
    {
        return true;
    }

    /**
     * 短信验证码登录
     *
     * @param string $mobile
     * @param string $code
     * @return bool
     */
    public function sms(string $mobile, string $code): bool
    {
        return true;
    }
}
