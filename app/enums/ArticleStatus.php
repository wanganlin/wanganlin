<?php

declare(strict_types=1);

namespace app\enums;

enum ArticleStatus
{
    /**
     * 草稿
     */
    const DRAFT = 0;

    /**
     * 已发布
     */
    const PUBLISHED = 1;

    /**
     * 无效
     */
    const INVALID = 2;
}
