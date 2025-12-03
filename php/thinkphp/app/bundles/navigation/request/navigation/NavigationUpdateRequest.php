<?php

declare(strict_types=1);

namespace app\bundles\navigation\request\navigation;

use OpenApi\Attributes as OA;
use think\Validate;

#[OA\Schema(
    schema: 'NavigationUpdateRequest',
    required: [
        'id',
        'parent_id',
        'position',
        'title',
        'url',
        'icon',
        'target',
        'sort',
        'status',
        'created_time',
        'updated_time',
    ],
    properties: [
        new OA\Property(property: 'id', description: 'ID', type: 'integer'),
        new OA\Property(property: 'parent_id', description: '上级导航ID', type: 'integer'),
        new OA\Property(property: 'position', description: '导航位置: header-顶部;footer-底部;side-侧边', type: 'string'),
        new OA\Property(property: 'title', description: '标题', type: 'string'),
        new OA\Property(property: 'url', description: '链接', type: 'string'),
        new OA\Property(property: 'icon', description: '图标', type: 'string'),
        new OA\Property(property: 'target', description: '打开方式: _blank-新窗口;_self-当前窗口', type: 'string'),
        new OA\Property(property: 'sort', description: '排序', type: 'integer'),
        new OA\Property(property: 'status', description: '状态: 1-正常;2-禁用', type: 'integer'),
        new OA\Property(property: 'created_time', description: '创建时间', type: 'string'),
        new OA\Property(property: 'updated_time', description: '更新时间', type: 'string'),
    ]
)]
class NavigationUpdateRequest extends Validate
{
    protected $rule = [
        'id' => 'require',
        'parent_id' => 'require',
        'position' => 'require',
        'title' => 'require',
        'url' => 'require',
        'icon' => 'require',
        'target' => 'require',
        'sort' => 'require',
        'status' => 'require',
        'created_time' => 'require',
        'updated_time' => 'require',
    ];

    protected $message = [
        'id.require' => '请设置ID',
        'parent_id.require' => '请设置上级导航ID',
        'position.require' => '请设置导航位置: header-顶部;footer-底部;side-侧边',
        'title.require' => '请设置标题',
        'url.require' => '请设置链接',
        'icon.require' => '请设置图标',
        'target.require' => '请设置打开方式: _blank-新窗口;_self-当前窗口',
        'sort.require' => '请设置排序',
        'status.require' => '请设置状态: 1-正常;2-禁用',
        'created_time.require' => '请设置创建时间',
        'updated_time.require' => '请设置更新时间',
    ];
}
