<?php

declare(strict_types=1);

namespace app\bundles\setting\service;

use app\bundles\setting\repository\SettingRepository;
use Juling\Foundation\Contract\ServiceInterface;
use Juling\Foundation\Service\CommonService;

class SettingBundleService extends CommonService implements ServiceInterface
{
    public function getRepository(): SettingRepository
    {
        return SettingRepository::getInstance();
    }
}
