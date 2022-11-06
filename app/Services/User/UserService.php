<?php

declare(strict_types=1);

namespace App\Services\User;

use App\Models\User;
use App\Services\User\Internal\UserOutput;

class UserService
{
    /**
     * 通过电子邮箱地址获取用户
     *
     * @param string $email
     * @return UserOutput|null
     */
    public function getUserByEmail(string $email): ?UserOutput
    {
        $user = User::query()->where('email', $email)->first();

        if ($user) {
            $userOutput = new UserOutput();
            $userOutput->setId($user->id);
            $userOutput->setName($user->name);
            $userOutput->setAvatar($user->avatar);
            return $userOutput;
        }

        return null;
    }
}
