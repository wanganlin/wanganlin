<?php

declare(strict_types=1);

namespace app\bundles\comment\request\comment;

use OpenApi\Attributes as OA;
use think\Validate;

#[OA\Schema(
    schema: 'CommentUpdateRequest',
    required: [
        'id',
        'parent_id',
        'user_id',
        'commentable_type',
        'commentable_id',
        'content',
        'ip',
        'user_agent',
        'like_count',
        'status',
        'is_top',
        'is_hot',
        'deleted',
        'created_time',
        'updated_time',
        'deleted_time',
    ],
    properties: [
        new OA\Property(property: 'id', description: 'ID', type: 'integer'),
        new OA\Property(property: 'parent_id', description: '父评论ID', type: 'integer'),
        new OA\Property(property: 'user_id', description: '用户ID', type: 'integer'),
        new OA\Property(property: 'commentable_type', description: '评论对象类型', type: 'string'),
        new OA\Property(property: 'commentable_id', description: '评论对象ID', type: 'integer'),
        new OA\Property(property: 'content', description: '评论内容', type: 'string'),
        new OA\Property(property: 'ip', description: 'IP地址', type: 'string'),
        new OA\Property(property: 'user_agent', description: 'User Agent', type: 'string'),
        new OA\Property(property: 'like_count', description: '点赞次数', type: 'integer'),
        new OA\Property(property: 'status', description: '状态: 1-待审核;2-已发布;3-已拒绝', type: 'integer'),
        new OA\Property(property: 'is_top', description: '是否置顶: 0-否;1-是', type: 'integer'),
        new OA\Property(property: 'is_hot', description: '是否热门: 0-否;1-是', type: 'integer'),
        new OA\Property(property: 'deleted', description: '删除状态: 0-未删除;1-已删除', type: 'integer'),
        new OA\Property(property: 'created_time', description: '创建时间', type: 'string'),
        new OA\Property(property: 'updated_time', description: '更新时间', type: 'string'),
        new OA\Property(property: 'deleted_time', description: '删除时间', type: 'string'),
    ]
)]
class CommentUpdateRequest extends Validate
{
    protected $rule = [
        'id' => 'require',
        'parent_id' => 'require',
        'user_id' => 'require',
        'commentable_type' => 'require',
        'commentable_id' => 'require',
        'content' => 'require',
        'ip' => 'require',
        'user_agent' => 'require',
        'like_count' => 'require',
        'status' => 'require',
        'is_top' => 'require',
        'is_hot' => 'require',
        'deleted' => 'require',
        'created_time' => 'require',
        'updated_time' => 'require',
        'deleted_time' => 'require',
    ];

    protected $message = [
        'id.require' => '请设置ID',
        'parent_id.require' => '请设置父评论ID',
        'user_id.require' => '请设置用户ID',
        'commentable_type.require' => '请设置评论对象类型',
        'commentable_id.require' => '请设置评论对象ID',
        'content.require' => '请设置评论内容',
        'ip.require' => '请设置IP地址',
        'user_agent.require' => '请设置User Agent',
        'like_count.require' => '请设置点赞次数',
        'status.require' => '请设置状态: 1-待审核;2-已发布;3-已拒绝',
        'is_top.require' => '请设置是否置顶: 0-否;1-是',
        'is_hot.require' => '请设置是否热门: 0-否;1-是',
        'deleted.require' => '请设置删除状态: 0-未删除;1-已删除',
        'created_time.require' => '请设置创建时间',
        'updated_time.require' => '请设置更新时间',
        'deleted_time.require' => '请设置删除时间',
    ];
}
