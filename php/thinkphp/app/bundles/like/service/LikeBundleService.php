<?php

declare(strict_types=1);

namespace app\bundles\like\service;

use app\bundles\like\repository\LikeRepository;
use Juling\Foundation\Contract\ServiceInterface;
use Juling\Foundation\Service\CommonService;

class LikeBundleService extends CommonService implements ServiceInterface
{
    public function getRepository(): LikeRepository
    {
        return LikeRepository::getInstance();
    }
}
