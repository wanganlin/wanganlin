<?php

declare(strict_types=1);

namespace app\bundles\system\service;

use app\bundles\system\repository\SystemRoleRepository;
use Juling\Foundation\Contract\ServiceInterface;
use Juling\Foundation\Service\CommonService;

class SystemRoleBundleService extends CommonService implements ServiceInterface
{
    public function getRepository(): SystemRoleRepository
    {
        return SystemRoleRepository::getInstance();
    }
}
