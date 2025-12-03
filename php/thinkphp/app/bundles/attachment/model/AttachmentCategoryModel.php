<?php

declare(strict_types=1);

namespace app\bundles\attachment\model;

use think\Model;

class AttachmentCategoryModel extends Model
{
    /**
     * 设置表
     */
    protected $name = 'attachment_category';

    /**
     * 设置字段
     */
    protected array $field = [
        'id',
        'parent_id',
        'name',
        'type',
        'sort',
        'created_time',
        'updated_time',
    ];
}
