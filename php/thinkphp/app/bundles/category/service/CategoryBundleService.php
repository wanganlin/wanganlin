<?php

declare(strict_types=1);

namespace app\bundles\category\service;

use app\bundles\category\repository\CategoryRepository;
use Juling\Foundation\Contract\ServiceInterface;
use Juling\Foundation\Service\CommonService;

class CategoryBundleService extends CommonService implements ServiceInterface
{
    public function getRepository(): CategoryRepository
    {
        return CategoryRepository::getInstance();
    }
}
