<?php

declare(strict_types=1);

namespace app\bundles\system\service;

use app\bundles\system\repository\SystemRolePermissionRepository;
use Juling\Foundation\Contract\ServiceInterface;
use Juling\Foundation\Service\CommonService;

class SystemRolePermissionBundleService extends CommonService implements ServiceInterface
{
    public function getRepository(): SystemRolePermissionRepository
    {
        return SystemRolePermissionRepository::getInstance();
    }
}
