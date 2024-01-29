<?php

declare(strict_types=1);

namespace app\bundle\auth\service;

use app\bundle\user\service\UserBundleService;
use app\model\UserModel;
use app\bundle\auth\service\input\LoginInput;
use Exception;

class LoginBundleService
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

        $userManager = new UserBundleService();
        if (!$userManager->passwordVerify($loginInput->getPassword(), $userModel->password)) {
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
        $userBundleService = new UserBundleService();
        if (is_email($username)) {
            return $userBundleService->getUserByEmail($username);
        } elseif (is_mobile($username)) {
            return $userBundleService->getUserByMobile($username);
        }
        return $userBundleService->getUserByUsername($username);
    }
}
