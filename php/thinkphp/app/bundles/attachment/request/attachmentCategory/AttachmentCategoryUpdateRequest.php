<?php

declare(strict_types=1);

namespace app\bundles\attachment\request\attachmentCategory;

use OpenApi\Attributes as OA;
use think\Validate;

#[OA\Schema(
    schema: 'AttachmentCategoryUpdateRequest',
    required: [
        'id',
        'parent_id',
        'name',
        'type',
        'sort',
        'created_time',
        'updated_time',
    ],
    properties: [
        new OA\Property(property: 'id', description: 'ID', type: 'integer'),
        new OA\Property(property: 'parent_id', description: '上级分类ID', type: 'integer'),
        new OA\Property(property: 'name', description: '分类名称', type: 'string'),
        new OA\Property(property: 'type', description: '分类类型: image-图片;video-视频;audio-音频;document-文档', type: 'string'),
        new OA\Property(property: 'sort', description: '排序', type: 'integer'),
        new OA\Property(property: 'created_time', description: '创建时间', type: 'string'),
        new OA\Property(property: 'updated_time', description: '更新时间', type: 'string'),
    ]
)]
class AttachmentCategoryUpdateRequest extends Validate
{
    protected $rule = [
        'id' => 'require',
        'parent_id' => 'require',
        'name' => 'require',
        'type' => 'require',
        'sort' => 'require',
        'created_time' => 'require',
        'updated_time' => 'require',
    ];

    protected $message = [
        'id.require' => '请设置ID',
        'parent_id.require' => '请设置上级分类ID',
        'name.require' => '请设置分类名称',
        'type.require' => '请设置分类类型: image-图片;video-视频;audio-音频;document-文档',
        'sort.require' => '请设置排序',
        'created_time.require' => '请设置创建时间',
        'updated_time.require' => '请设置更新时间',
    ];
}
