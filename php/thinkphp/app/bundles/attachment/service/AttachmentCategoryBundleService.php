<?php

declare(strict_types=1);

namespace app\bundles\attachment\service;

use app\bundles\attachment\repository\AttachmentCategoryRepository;
use Juling\Foundation\Contract\ServiceInterface;
use Juling\Foundation\Service\CommonService;

class AttachmentCategoryBundleService extends CommonService implements ServiceInterface
{
    public function getRepository(): AttachmentCategoryRepository
    {
        return AttachmentCategoryRepository::getInstance();
    }
}
