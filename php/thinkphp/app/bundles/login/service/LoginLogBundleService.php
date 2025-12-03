<?php

declare(strict_types=1);

namespace app\bundles\login\service;

use app\bundles\login\repository\LoginLogRepository;
use Juling\Foundation\Contract\ServiceInterface;
use Juling\Foundation\Service\CommonService;

class LoginLogBundleService extends CommonService implements ServiceInterface
{
    public function getRepository(): LoginLogRepository
    {
        return LoginLogRepository::getInstance();
    }
}
