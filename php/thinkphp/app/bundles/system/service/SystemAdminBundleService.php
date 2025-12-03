<?php

declare(strict_types=1);

namespace app\bundles\system\service;

use app\bundles\system\repository\SystemAdminRepository;
use Juling\Foundation\Contract\ServiceInterface;
use Juling\Foundation\Service\CommonService;

class SystemAdminBundleService extends CommonService implements ServiceInterface
{
    public function getRepository(): SystemAdminRepository
    {
        return SystemAdminRepository::getInstance();
    }
}
