<?php

declare(strict_types=1);

namespace app\bundles\system\service;

use app\bundles\system\repository\SystemMenuRepository;
use Juling\Foundation\Contract\ServiceInterface;
use Juling\Foundation\Service\CommonService;

class SystemMenuBundleService extends CommonService implements ServiceInterface
{
    public function getRepository(): SystemMenuRepository
    {
        return SystemMenuRepository::getInstance();
    }
}
