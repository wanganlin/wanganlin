<?php

declare(strict_types=1);

namespace app\bundles\dict\service;

use app\bundles\dict\repository\DictRepository;
use Juling\Foundation\Contract\ServiceInterface;
use Juling\Foundation\Service\CommonService;

class DictBundleService extends CommonService implements ServiceInterface
{
    public function getRepository(): DictRepository
    {
        return DictRepository::getInstance();
    }
}
