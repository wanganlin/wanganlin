<?php

declare(strict_types=1);

namespace app\bundles\system\service;

use app\bundles\system\repository\SystemAdminRoleRepository;
use Juling\Foundation\Contract\ServiceInterface;
use Juling\Foundation\Service\CommonService;

class SystemAdminRoleBundleService extends CommonService implements ServiceInterface
{
    public function getRepository(): SystemAdminRoleRepository
    {
        return SystemAdminRoleRepository::getInstance();
    }
}
