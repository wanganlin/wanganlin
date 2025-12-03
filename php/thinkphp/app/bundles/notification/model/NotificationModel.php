<?php

declare(strict_types=1);

namespace app\bundles\notification\model;

use think\Model;

class NotificationModel extends Model
{
    /**
     * 设置表
     */
    protected $name = 'notification';

    /**
     * 设置字段
     */
    protected array $field = [
        'id',
        'user_id',
        'type',
        'title',
        'content',
        'link',
        'is_read',
        'read_time',
        'created_time',
    ];
}
