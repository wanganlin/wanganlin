<?php

declare(strict_types=1);

namespace app\bundles\system\request\systemMenu;

use OpenApi\Attributes as OA;
use think\Validate;

#[OA\Schema(
    schema: 'SystemMenuUpdateRequest',
    required: [
        'id',
        'parent_id',
        'name',
        'icon',
        'description',
        'sort',
        'status',
        'created_time',
        'updated_time',
    ],
    properties: [
        new OA\Property(property: 'id', description: 'ID', type: 'integer'),
        new OA\Property(property: 'parent_id', description: '上级菜单ID', type: 'integer'),
        new OA\Property(property: 'name', description: '名称', type: 'string'),
        new OA\Property(property: 'icon', description: 'ICON图标', type: 'string'),
        new OA\Property(property: 'description', description: '描述', type: 'string'),
        new OA\Property(property: 'sort', description: '排序', type: 'integer'),
        new OA\Property(property: 'status', description: '状态: 1-正常;2-禁用', type: 'integer'),
        new OA\Property(property: 'created_time', description: '创建时间', type: 'string'),
        new OA\Property(property: 'updated_time', description: '更新时间', type: 'string'),
    ]
)]
class SystemMenuUpdateRequest extends Validate
{
    protected $rule = [
        'id' => 'require',
        'parent_id' => 'require',
        'name' => 'require',
        'icon' => 'require',
        'description' => 'require',
        'sort' => 'require',
        'status' => 'require',
        'created_time' => 'require',
        'updated_time' => 'require',
    ];

    protected $message = [
        'id.require' => '请设置ID',
        'parent_id.require' => '请设置上级菜单ID',
        'name.require' => '请设置名称',
        'icon.require' => '请设置ICON图标',
        'description.require' => '请设置描述',
        'sort.require' => '请设置排序',
        'status.require' => '请设置状态: 1-正常;2-禁用',
        'created_time.require' => '请设置创建时间',
        'updated_time.require' => '请设置更新时间',
    ];
}
