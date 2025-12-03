<?php

declare(strict_types=1);

namespace app\bundles\favorite\request\favorite;

use OpenApi\Attributes as OA;
use think\Validate;

#[OA\Schema(
    schema: 'FavoriteUpdateRequest',
    required: [
        'id',
        'user_id',
        'favorable_type',
        'favorable_id',
        'created_time',
    ],
    properties: [
        new OA\Property(property: 'id', description: 'ID', type: 'integer'),
        new OA\Property(property: 'user_id', description: '用户ID', type: 'integer'),
        new OA\Property(property: 'favorable_type', description: '收藏对象类型', type: 'string'),
        new OA\Property(property: 'favorable_id', description: '收藏对象ID', type: 'integer'),
        new OA\Property(property: 'created_time', description: '创建时间', type: 'string'),
    ]
)]
class FavoriteUpdateRequest extends Validate
{
    protected $rule = [
        'id' => 'require',
        'user_id' => 'require',
        'favorable_type' => 'require',
        'favorable_id' => 'require',
        'created_time' => 'require',
    ];

    protected $message = [
        'id.require' => '请设置ID',
        'user_id.require' => '请设置用户ID',
        'favorable_type.require' => '请设置收藏对象类型',
        'favorable_id.require' => '请设置收藏对象ID',
        'created_time.require' => '请设置创建时间',
    ];
}
