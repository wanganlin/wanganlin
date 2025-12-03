<?php

declare(strict_types=1);

namespace app\bundles\banner\request\bannerPosition;

use OpenApi\Attributes as OA;
use think\Validate;

#[OA\Schema(
    schema: 'BannerPositionCreateRequest',
    required: [
        'id',
        'name',
        'code',
        'description',
        'width',
        'height',
        'created_time',
        'updated_time',
    ],
    properties: [
        new OA\Property(property: 'id', description: 'ID', type: 'integer'),
        new OA\Property(property: 'name', description: '广告位名称', type: 'string'),
        new OA\Property(property: 'code', description: '调用标识', type: 'string'),
        new OA\Property(property: 'description', description: '描述', type: 'string'),
        new OA\Property(property: 'width', description: '推荐宽度', type: 'integer'),
        new OA\Property(property: 'height', description: '推荐高度', type: 'integer'),
        new OA\Property(property: 'created_time', description: '创建时间', type: 'string'),
        new OA\Property(property: 'updated_time', description: '更新时间', type: 'string'),
    ]
)]
class BannerPositionCreateRequest extends Validate
{
    protected $rule = [
        'id' => 'require',
        'name' => 'require',
        'code' => 'require',
        'description' => 'require',
        'width' => 'require',
        'height' => 'require',
        'created_time' => 'require',
        'updated_time' => 'require',
    ];

    protected $message = [
        'id.require' => '请设置ID',
        'name.require' => '请设置广告位名称',
        'code.require' => '请设置调用标识',
        'description.require' => '请设置描述',
        'width.require' => '请设置推荐宽度',
        'height.require' => '请设置推荐高度',
        'created_time.require' => '请设置创建时间',
        'updated_time.require' => '请设置更新时间',
    ];
}
