<?php

declare(strict_types=1);

namespace app\bundles\attachment\service;

use app\bundles\attachment\repository\AttachmentRepository;
use Juling\Foundation\Contract\ServiceInterface;
use Juling\Foundation\Service\CommonService;

class AttachmentBundleService extends CommonService implements ServiceInterface
{
    public function getRepository(): AttachmentRepository
    {
        return AttachmentRepository::getInstance();
    }
}
