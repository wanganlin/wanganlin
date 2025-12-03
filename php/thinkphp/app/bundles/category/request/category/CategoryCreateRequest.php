<?php

declare(strict_types=1);

namespace app\bundles\category\request\category;

use OpenApi\Attributes as OA;
use think\Validate;

#[OA\Schema(
    schema: 'CategoryCreateRequest',
    required: [
        'id',
        'parent_id',
        'name',
        'slug',
        'description',
        'type',
        'sort',
        'icon',
        'path',
        'status',
        'seo_title',
        'seo_keywords',
        'seo_description',
        'deleted',
        'created_time',
        'updated_time',
        'deleted_time',
    ],
    properties: [
        new OA\Property(property: 'id', description: 'ID', type: 'integer'),
        new OA\Property(property: 'parent_id', description: '上级分类ID', type: 'integer'),
        new OA\Property(property: 'name', description: '分类名称', type: 'string'),
        new OA\Property(property: 'slug', description: '分类别名', type: 'string'),
        new OA\Property(property: 'description', description: '分类描述', type: 'string'),
        new OA\Property(property: 'type', description: '分类类型: article-文章;product-产品;custom-自定义', type: 'string'),
        new OA\Property(property: 'sort', description: '排序', type: 'integer'),
        new OA\Property(property: 'icon', description: '图标', type: 'string'),
        new OA\Property(property: 'path', description: '分类路径', type: 'string'),
        new OA\Property(property: 'status', description: '状态: 1-正常;2-禁用', type: 'integer'),
        new OA\Property(property: 'seo_title', description: 'SEO标题', type: 'string'),
        new OA\Property(property: 'seo_keywords', description: 'SEO关键词', type: 'string'),
        new OA\Property(property: 'seo_description', description: 'SEO描述', type: 'string'),
        new OA\Property(property: 'deleted', description: '删除状态: 0-未删除;1-已删除', type: 'integer'),
        new OA\Property(property: 'created_time', description: '创建时间', type: 'string'),
        new OA\Property(property: 'updated_time', description: '更新时间', type: 'string'),
        new OA\Property(property: 'deleted_time', description: '删除时间', type: 'string'),
    ]
)]
class CategoryCreateRequest extends Validate
{
    protected $rule = [
        'id' => 'require',
        'parent_id' => 'require',
        'name' => 'require',
        'slug' => 'require',
        'description' => 'require',
        'type' => 'require',
        'sort' => 'require',
        'icon' => 'require',
        'path' => 'require',
        'status' => 'require',
        'seo_title' => 'require',
        'seo_keywords' => 'require',
        'seo_description' => 'require',
        'deleted' => 'require',
        'created_time' => 'require',
        'updated_time' => 'require',
        'deleted_time' => 'require',
    ];

    protected $message = [
        'id.require' => '请设置ID',
        'parent_id.require' => '请设置上级分类ID',
        'name.require' => '请设置分类名称',
        'slug.require' => '请设置分类别名',
        'description.require' => '请设置分类描述',
        'type.require' => '请设置分类类型: article-文章;product-产品;custom-自定义',
        'sort.require' => '请设置排序',
        'icon.require' => '请设置图标',
        'path.require' => '请设置分类路径',
        'status.require' => '请设置状态: 1-正常;2-禁用',
        'seo_title.require' => '请设置SEO标题',
        'seo_keywords.require' => '请设置SEO关键词',
        'seo_description.require' => '请设置SEO描述',
        'deleted.require' => '请设置删除状态: 0-未删除;1-已删除',
        'created_time.require' => '请设置创建时间',
        'updated_time.require' => '请设置更新时间',
        'deleted_time.require' => '请设置删除时间',
    ];
}
