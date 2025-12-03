<?php

declare(strict_types=1);

namespace app\bundles\banner\request\banner;

use OpenApi\Attributes as OA;
use think\Validate;

#[OA\Schema(
    schema: 'BannerUpdateRequest',
    required: [
        'id',
        'position_id',
        'title',
        'image',
        'link',
        'target',
        'start_time',
        'end_time',
        'sort',
        'click_count',
        'status',
        'created_time',
        'updated_time',
    ],
    properties: [
        new OA\Property(property: 'id', description: 'ID', type: 'integer'),
        new OA\Property(property: 'position_id', description: '广告位ID', type: 'integer'),
        new OA\Property(property: 'title', description: '标题', type: 'string'),
        new OA\Property(property: 'image', description: '图片', type: 'string'),
        new OA\Property(property: 'link', description: '链接', type: 'string'),
        new OA\Property(property: 'target', description: '打开方式: _blank-新窗口;_self-当前窗口', type: 'string'),
        new OA\Property(property: 'start_time', description: '开始时间', type: 'string'),
        new OA\Property(property: 'end_time', description: '结束时间', type: 'string'),
        new OA\Property(property: 'sort', description: '排序', type: 'integer'),
        new OA\Property(property: 'click_count', description: '点击次数', type: 'integer'),
        new OA\Property(property: 'status', description: '状态: 1-正常;2-禁用', type: 'integer'),
        new OA\Property(property: 'created_time', description: '创建时间', type: 'string'),
        new OA\Property(property: 'updated_time', description: '更新时间', type: 'string'),
    ]
)]
class BannerUpdateRequest extends Validate
{
    protected $rule = [
        'id' => 'require',
        'position_id' => 'require',
        'title' => 'require',
        'image' => 'require',
        'link' => 'require',
        'target' => 'require',
        'start_time' => 'require',
        'end_time' => 'require',
        'sort' => 'require',
        'click_count' => 'require',
        'status' => 'require',
        'created_time' => 'require',
        'updated_time' => 'require',
    ];

    protected $message = [
        'id.require' => '请设置ID',
        'position_id.require' => '请设置广告位ID',
        'title.require' => '请设置标题',
        'image.require' => '请设置图片',
        'link.require' => '请设置链接',
        'target.require' => '请设置打开方式: _blank-新窗口;_self-当前窗口',
        'start_time.require' => '请设置开始时间',
        'end_time.require' => '请设置结束时间',
        'sort.require' => '请设置排序',
        'click_count.require' => '请设置点击次数',
        'status.require' => '请设置状态: 1-正常;2-禁用',
        'created_time.require' => '请设置创建时间',
        'updated_time.require' => '请设置更新时间',
    ];
}
