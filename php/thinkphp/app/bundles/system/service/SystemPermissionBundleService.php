<?php

declare(strict_types=1);

namespace app\bundles\system\service;

use app\bundles\system\repository\SystemPermissionRepository;
use Juling\Foundation\Contract\ServiceInterface;
use Juling\Foundation\Service\CommonService;

class SystemPermissionBundleService extends CommonService implements ServiceInterface
{
    public function getRepository(): SystemPermissionRepository
    {
        return SystemPermissionRepository::getInstance();
    }
}
