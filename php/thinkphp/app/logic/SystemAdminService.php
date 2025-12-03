<?php

declare(strict_types=1);

namespace app\logic;

use app\contract\SystemAdminContract;

class SystemAdminService implements SystemAdminContract
{
    /**
     * 登录
     */
    public function login(string $username, string $password, bool $remember = false): bool
    {
        return true;
    }
}
