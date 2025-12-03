<?php

declare(strict_types=1);

namespace app\bundles\article\service;

use app\bundles\article\repository\ArticleTagRepository;
use Juling\Foundation\Contract\ServiceInterface;
use Juling\Foundation\Service\CommonService;

class ArticleTagBundleService extends CommonService implements ServiceInterface
{
    public function getRepository(): ArticleTagRepository
    {
        return ArticleTagRepository::getInstance();
    }
}
