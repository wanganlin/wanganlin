<?php

declare(strict_types=1);

namespace app\bundles\navigation\service;

use app\bundles\navigation\repository\NavigationRepository;
use Juling\Foundation\Contract\ServiceInterface;
use Juling\Foundation\Service\CommonService;

class NavigationBundleService extends CommonService implements ServiceInterface
{
    public function getRepository(): NavigationRepository
    {
        return NavigationRepository::getInstance();
    }
}
