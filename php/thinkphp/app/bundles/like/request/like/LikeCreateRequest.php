<?php

declare(strict_types=1);

namespace app\bundles\like\request\like;

use OpenApi\Attributes as OA;
use think\Validate;

#[OA\Schema(
    schema: 'LikeCreateRequest',
    required: [
        'id',
        'user_id',
        'likeable_type',
        'likeable_id',
        'created_time',
    ],
    properties: [
        new OA\Property(property: 'id', description: 'ID', type: 'integer'),
        new OA\Property(property: 'user_id', description: '用户ID', type: 'integer'),
        new OA\Property(property: 'likeable_type', description: '点赞对象类型', type: 'string'),
        new OA\Property(property: 'likeable_id', description: '点赞对象ID', type: 'integer'),
        new OA\Property(property: 'created_time', description: '创建时间', type: 'string'),
    ]
)]
class LikeCreateRequest extends Validate
{
    protected $rule = [
        'id' => 'require',
        'user_id' => 'require',
        'likeable_type' => 'require',
        'likeable_id' => 'require',
        'created_time' => 'require',
    ];

    protected $message = [
        'id.require' => '请设置ID',
        'user_id.require' => '请设置用户ID',
        'likeable_type.require' => '请设置点赞对象类型',
        'likeable_id.require' => '请设置点赞对象ID',
        'created_time.require' => '请设置创建时间',
    ];
}
