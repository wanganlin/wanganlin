<?php

declare(strict_types=1);

namespace App\Service;

use App\Models\User;

/**
 * Class UserService
 * @package App\Service
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
