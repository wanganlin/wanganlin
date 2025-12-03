<?php

declare(strict_types=1);

namespace app\bundles\link\service;

use app\bundles\link\repository\LinkRepository;
use Juling\Foundation\Contract\ServiceInterface;
use Juling\Foundation\Service\CommonService;

class LinkBundleService extends CommonService implements ServiceInterface
{
    public function getRepository(): LinkRepository
    {
        return LinkRepository::getInstance();
    }
}
