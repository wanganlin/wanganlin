<?php

declare(strict_types=1);

namespace app\bundles\tag\service;

use app\bundles\tag\repository\TagRepository;
use Juling\Foundation\Contract\ServiceInterface;
use Juling\Foundation\Service\CommonService;

class TagBundleService extends CommonService implements ServiceInterface
{
    public function getRepository(): TagRepository
    {
        return TagRepository::getInstance();
    }
}
