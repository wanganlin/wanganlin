<?php

declare(strict_types=1);

namespace App\Service;

use App\Model\User;
use Hyperf\Di\Annotation\Inject;

class UserService
{
    #[Inject]
    private User $user;

}
