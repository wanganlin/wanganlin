<?php

declare(strict_types=1);

namespace app\bundles\page\service;

use app\bundles\page\repository\PageRepository;
use Juling\Foundation\Contract\ServiceInterface;
use Juling\Foundation\Service\CommonService;

class PageBundleService extends CommonService implements ServiceInterface
{
    public function getRepository(): PageRepository
    {
        return PageRepository::getInstance();
    }
}
