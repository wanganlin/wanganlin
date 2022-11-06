<?php

declare(strict_types=1);

namespace App\Enums;

enum ContentStatus
{
    /**
     * 草稿
     */
    case DRAFT;

    /**
     * 已发布
     */
    case PUBLISHED;

    /**
     * 无效
     */
    case INVALID;
}
