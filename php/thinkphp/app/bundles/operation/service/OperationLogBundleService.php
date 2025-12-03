<?php

declare(strict_types=1);

namespace app\bundles\operation\service;

use app\bundles\operation\repository\OperationLogRepository;
use Juling\Foundation\Contract\ServiceInterface;
use Juling\Foundation\Service\CommonService;

class OperationLogBundleService extends CommonService implements ServiceInterface
{
    public function getRepository(): OperationLogRepository
    {
        return OperationLogRepository::getInstance();
    }
}
