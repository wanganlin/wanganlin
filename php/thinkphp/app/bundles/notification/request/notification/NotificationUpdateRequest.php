<?php

declare(strict_types=1);

namespace app\bundles\notification\request\notification;

use OpenApi\Attributes as OA;
use think\Validate;

#[OA\Schema(
    schema: 'NotificationUpdateRequest',
    required: [
        'id',
        'user_id',
        'type',
        'title',
        'content',
        'link',
        'is_read',
        'read_time',
        'created_time',
    ],
    properties: [
        new OA\Property(property: 'id', description: 'ID', type: 'integer'),
        new OA\Property(property: 'user_id', description: '用户ID', type: 'integer'),
        new OA\Property(property: 'type', description: '通知类型: system-系统;message-私信;comment-评论;like-点赞', type: 'string'),
        new OA\Property(property: 'title', description: '标题', type: 'string'),
        new OA\Property(property: 'content', description: '内容', type: 'string'),
        new OA\Property(property: 'link', description: '跳转链接', type: 'string'),
        new OA\Property(property: 'is_read', description: '是否已读: 0-未读;1-已读', type: 'integer'),
        new OA\Property(property: 'read_time', description: '阅读时间', type: 'string'),
        new OA\Property(property: 'created_time', description: '创建时间', type: 'string'),
    ]
)]
class NotificationUpdateRequest extends Validate
{
    protected $rule = [
        'id' => 'require',
        'user_id' => 'require',
        'type' => 'require',
        'title' => 'require',
        'content' => 'require',
        'link' => 'require',
        'is_read' => 'require',
        'read_time' => 'require',
        'created_time' => 'require',
    ];

    protected $message = [
        'id.require' => '请设置ID',
        'user_id.require' => '请设置用户ID',
        'type.require' => '请设置通知类型: system-系统;message-私信;comment-评论;like-点赞',
        'title.require' => '请设置标题',
        'content.require' => '请设置内容',
        'link.require' => '请设置跳转链接',
        'is_read.require' => '请设置是否已读: 0-未读;1-已读',
        'read_time.require' => '请设置阅读时间',
        'created_time.require' => '请设置创建时间',
    ];
}
