<?php

declare(strict_types=1);

namespace app\contract;

interface SystemAdminContract
{
    /**
     * 登录
     */
    public function login(string $username, string $password, bool $remember = false): bool;
}
