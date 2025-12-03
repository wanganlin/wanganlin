<?php

declare(strict_types=1);

namespace app\bundles\link\request\link;

use OpenApi\Attributes as OA;
use think\Validate;

#[OA\Schema(
    schema: 'LinkUpdateRequest',
    required: [
        'id',
        'category_id',
        'title',
        'url',
        'logo',
        'description',
        'rating',
        'sort',
        'target',
        'nofollow',
        'status',
        'created_time',
        'updated_time',
    ],
    properties: [
        new OA\Property(property: 'id', description: 'ID', type: 'integer'),
        new OA\Property(property: 'category_id', description: '分类ID', type: 'integer'),
        new OA\Property(property: 'title', description: '标题', type: 'string'),
        new OA\Property(property: 'url', description: '链接', type: 'string'),
        new OA\Property(property: 'logo', description: 'LOGO', type: 'string'),
        new OA\Property(property: 'description', description: '描述', type: 'string'),
        new OA\Property(property: 'rating', description: '星级: 1-5', type: 'integer'),
        new OA\Property(property: 'sort', description: '排序', type: 'integer'),
        new OA\Property(property: 'target', description: '打开方式: _blank-新窗口;_self-当前窗口', type: 'string'),
        new OA\Property(property: 'nofollow', description: '是否nofollow: 0-否;1-是', type: 'integer'),
        new OA\Property(property: 'status', description: '状态: 1-正常;2-禁用', type: 'integer'),
        new OA\Property(property: 'created_time', description: '创建时间', type: 'string'),
        new OA\Property(property: 'updated_time', description: '更新时间', type: 'string'),
    ]
)]
class LinkUpdateRequest extends Validate
{
    protected $rule = [
        'id' => 'require',
        'category_id' => 'require',
        'title' => 'require',
        'url' => 'require',
        'logo' => 'require',
        'description' => 'require',
        'rating' => 'require',
        'sort' => 'require',
        'target' => 'require',
        'nofollow' => 'require',
        'status' => 'require',
        'created_time' => 'require',
        'updated_time' => 'require',
    ];

    protected $message = [
        'id.require' => '请设置ID',
        'category_id.require' => '请设置分类ID',
        'title.require' => '请设置标题',
        'url.require' => '请设置链接',
        'logo.require' => '请设置LOGO',
        'description.require' => '请设置描述',
        'rating.require' => '请设置星级: 1-5',
        'sort.require' => '请设置排序',
        'target.require' => '请设置打开方式: _blank-新窗口;_self-当前窗口',
        'nofollow.require' => '请设置是否nofollow: 0-否;1-是',
        'status.require' => '请设置状态: 1-正常;2-禁用',
        'created_time.require' => '请设置创建时间',
        'updated_time.require' => '请设置更新时间',
    ];
}
