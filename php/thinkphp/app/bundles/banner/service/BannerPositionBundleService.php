<?php

declare(strict_types=1);

namespace app\bundles\banner\service;

use app\bundles\banner\repository\BannerPositionRepository;
use Juling\Foundation\Contract\ServiceInterface;
use Juling\Foundation\Service\CommonService;

class BannerPositionBundleService extends CommonService implements ServiceInterface
{
    public function getRepository(): BannerPositionRepository
    {
        return BannerPositionRepository::getInstance();
    }
}
