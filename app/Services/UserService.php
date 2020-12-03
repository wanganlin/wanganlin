<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\User;

/**
 * Class UserService
 * @package App\Services
 */
class UserService
{
    /**
     * @var User
     */
    private $user;

    /**
     * UserService constructor.
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }
}
