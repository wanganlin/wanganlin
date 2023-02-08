<?php

declare(strict_types=1);

namespace App\Services\Auth;

class ForgetService
{
    /**
     * 通过电子邮件找回密码
     *
     * @param string $email
     * @param string $code
     * @return bool
     */
    public function email(string $email, string $code): bool
    {
        return true;
    }

    /**
     * 通过短信验证码找回密码
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
