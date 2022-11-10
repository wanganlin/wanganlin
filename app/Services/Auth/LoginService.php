<?php

declare(strict_types=1);

namespace App\Services\Auth;

use App\Models\User;
use App\Services\User\UserService;
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
        $userService = new UserService();
        $user = $userService->getUserByColumn('username', $username);
        if ($this->validatePassword($user, $password)) {
            if (Auth::loginUsingId(($user->id))) {
                return true;
            }
        }

        return false;
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
        return false;
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
        return false;
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
        return false;
    }

    /**
     * 验证登录密码
     *
     * @param ?User $user
     * @param string $password
     * @return bool
     */
    private function validatePassword(?User $user, string $password): bool
    {
        if ($user) {
            return password_verify($user->password, $password);
        }

        return false;
    }
}
