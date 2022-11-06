<?php

declare(strict_types=1);

namespace App\Services\Auth;

class ResetService
{
    public function reset(string $username, $password): bool
    {
        return true;
    }
}
