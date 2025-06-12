<?php

declare(strict_types=1);

namespace app\service;

use app\repository\UserRepository;
use Juling\Foundation\Database\Contract\ServiceInterface;
use Juling\Foundation\Database\Service\CommonService;

class UserService extends CommonService implements ServiceInterface
{
    public function getRepository(): UserRepository
    {
        return UserRepository::getInstance();
    }
}
