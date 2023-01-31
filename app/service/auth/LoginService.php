<?php

declare(strict_types=1);

namespace app\service\auth;

use app\entity\Log;
use app\manager\user\UserManager;
use app\model\UserModel;
use app\service\auth\input\LoginInput;
use Exception;

class LoginService
{
    /**
     * 根据用户名和密码登录
     *
     * @param LoginInput $loginInput
     * @param string $guard
     * @return bool
     * @throws Exception
     */
    public function login(LoginInput $loginInput, string $guard): bool
    {
        $userModel = $this->getUser($loginInput->getUsername());
        if (is_null($userModel)) {
            throw new Exception('用户信息不存在');
        }

        $userManager = new UserManager();
        if (!$userManager->passwordVerify($loginInput->getPassword())) {
            throw new Exception('用户登录密码不正确');
        }

        // 校验状态

        // 记录日志

        // 记住登录
        if ($loginInput->isRememberMe()) {
            cookie($guard . '_remember', $userModel->getId(), 30 * 24 * 3600);
        }

        // 保存session
        session('auth_' . $guard, $userModel->getId());

        return true;
    }

    /**
     * 获取登录用户
     *
     * @param string $username
     * @return UserModel|null
     */
    private function getUser(string $username): ?UserModel
    {
        $userManager = new UserManager();
        if (filter_var($username, FILTER_VALIDATE_EMAIL) !== false) {
            return $userManager->getUserByEmail($username);
        } elseif (preg_match('/^1[3-9]\d{9}$/', $username) !== false) {
            return $userManager->getUserByMobile($username);
        }
        return $userManager->getUserByUsername($username);
    }
}
