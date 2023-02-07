<?php

namespace app\modules\auth\services;

use app\models\User;
use app\modules\auth\services\input\LoginInput;
use Yii;

class LoginService
{
    /**
     * 根据用户名和密码登录
     * @param LoginInput $loginInput
     * @return bool
     */
    public function login(LoginInput $loginInput): bool
    {
        $user = User::find()->where([
            'username' => $loginInput->getUsername()
        ])->one();

        if (is_null($user)) {
            return false;
        }

        if (!$user->validatePassword($loginInput->getPassword())) {
            return false;
        }

        // TODO log

        return Yii::$app->user->login($user, $loginInput->getRememberMe() ? 3600 * 24 * 30 : 0);
    }

    /**
     * 获取登录类型
     * @param string $username
     * @return string
     */
    private function getLoginType(string $username): string
    {
        if (filter_var($username, FILTER_VALIDATE_EMAIL) !== false) {
            return 'email';
        } elseif (preg_match('/^1[3-9]\d{9}$/', $username) !== false) {
            return 'mobile';
        }
        return 'username';
    }
}
