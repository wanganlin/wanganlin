<?php

declare(strict_types=1);

namespace app\bundles\page\request\page;

use OpenApi\Attributes as OA;
use think\Validate;

#[OA\Schema(
    schema: 'PageUpdateRequest',
    required: [
        'id',
        'title',
        'slug',
        'content',
        'template',
        'keywords',
        'description',
        'view_count',
        'status',
        'sort',
        'created_time',
        'updated_time',
    ],
    properties: [
        new OA\Property(property: 'id', description: 'ID', type: 'integer'),
        new OA\Property(property: 'title', description: '页面标题', type: 'string'),
        new OA\Property(property: 'slug', description: '页面别名', type: 'string'),
        new OA\Property(property: 'content', description: '页面内容', type: 'string'),
        new OA\Property(property: 'template', description: '模板', type: 'string'),
        new OA\Property(property: 'keywords', description: '关键词', type: 'string'),
        new OA\Property(property: 'description', description: '描述', type: 'string'),
        new OA\Property(property: 'view_count', description: '浏览次数', type: 'integer'),
        new OA\Property(property: 'status', description: '状态: 1-正常;2-禁用', type: 'integer'),
        new OA\Property(property: 'sort', description: '排序', type: 'integer'),
        new OA\Property(property: 'created_time', description: '创建时间', type: 'string'),
        new OA\Property(property: 'updated_time', description: '更新时间', type: 'string'),
    ]
)]
class PageUpdateRequest extends Validate
{
    protected $rule = [
        'id' => 'require',
        'title' => 'require',
        'slug' => 'require',
        'content' => 'require',
        'template' => 'require',
        'keywords' => 'require',
        'description' => 'require',
        'view_count' => 'require',
        'status' => 'require',
        'sort' => 'require',
        'created_time' => 'require',
        'updated_time' => 'require',
    ];

    protected $message = [
        'id.require' => '请设置ID',
        'title.require' => '请设置页面标题',
        'slug.require' => '请设置页面别名',
        'content.require' => '请设置页面内容',
        'template.require' => '请设置模板',
        'keywords.require' => '请设置关键词',
        'description.require' => '请设置描述',
        'view_count.require' => '请设置浏览次数',
        'status.require' => '请设置状态: 1-正常;2-禁用',
        'sort.require' => '请设置排序',
        'created_time.require' => '请设置创建时间',
        'updated_time.require' => '请设置更新时间',
    ];
}
