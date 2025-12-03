<?php

declare(strict_types=1);

namespace app\bundles\notification\service;

use app\bundles\notification\repository\NotificationRepository;
use Juling\Foundation\Contract\ServiceInterface;
use Juling\Foundation\Service\CommonService;

class NotificationBundleService extends CommonService implements ServiceInterface
{
    public function getRepository(): NotificationRepository
    {
        return NotificationRepository::getInstance();
    }
}
