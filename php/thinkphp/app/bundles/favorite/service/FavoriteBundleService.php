<?php

declare(strict_types=1);

namespace app\bundles\favorite\service;

use app\bundles\favorite\repository\FavoriteRepository;
use Juling\Foundation\Contract\ServiceInterface;
use Juling\Foundation\Service\CommonService;

class FavoriteBundleService extends CommonService implements ServiceInterface
{
    public function getRepository(): FavoriteRepository
    {
        return FavoriteRepository::getInstance();
    }
}
