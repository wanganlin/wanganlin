<?php

declare(strict_types=1);

namespace app\service;

use app\foundation\database\contract\ServiceInterface;
use app\foundation\database\service\CommonService;
use app\repository\UserRepository;

class UserService extends CommonService implements ServiceInterface
{
    public function getRepository(): UserRepository
    {
        return UserRepository::getInstance();
    }
}
