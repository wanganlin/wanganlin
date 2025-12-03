<?php

declare(strict_types=1);

namespace app\bundles\banner\service;

use app\bundles\banner\repository\BannerRepository;
use Juling\Foundation\Contract\ServiceInterface;
use Juling\Foundation\Service\CommonService;

class BannerBundleService extends CommonService implements ServiceInterface
{
    public function getRepository(): BannerRepository
    {
        return BannerRepository::getInstance();
    }
}
