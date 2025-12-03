<?php

declare(strict_types=1);

namespace app\bundles\setting\request\setting;

use OpenApi\Attributes as OA;
use think\Validate;

#[OA\Schema(
    schema: 'SettingCreateRequest',
    required: [
        'id',
        'group',
        'key',
        'value',
        'type',
        'title',
        'description',
        'sort',
        'created_time',
        'updated_time',
    ],
    properties: [
        new OA\Property(property: 'id', description: 'ID', type: 'integer'),
        new OA\Property(property: 'group', description: '配置分组: basic-基础;seo-SEO;upload-上传;email-邮件;sms-短信', type: 'string'),
        new OA\Property(property: 'key', description: '配置键', type: 'string'),
        new OA\Property(property: 'value', description: '配置值', type: 'string'),
        new OA\Property(property: 'type', description: '类型: text-文本;textarea-多行文本;radio-单选;checkbox-多选;image-图片;file-文件', type: 'string'),
        new OA\Property(property: 'title', description: '配置标题', type: 'string'),
        new OA\Property(property: 'description', description: '配置描述', type: 'string'),
        new OA\Property(property: 'sort', description: '排序', type: 'integer'),
        new OA\Property(property: 'created_time', description: '创建时间', type: 'string'),
        new OA\Property(property: 'updated_time', description: '更新时间', type: 'string'),
    ]
)]
class SettingCreateRequest extends Validate
{
    protected $rule = [
        'id' => 'require',
        'group' => 'require',
        'key' => 'require',
        'value' => 'require',
        'type' => 'require',
        'title' => 'require',
        'description' => 'require',
        'sort' => 'require',
        'created_time' => 'require',
        'updated_time' => 'require',
    ];

    protected $message = [
        'id.require' => '请设置ID',
        'group.require' => '请设置配置分组: basic-基础;seo-SEO;upload-上传;email-邮件;sms-短信',
        'key.require' => '请设置配置键',
        'value.require' => '请设置配置值',
        'type.require' => '请设置类型: text-文本;textarea-多行文本;radio-单选;checkbox-多选;image-图片;file-文件',
        'title.require' => '请设置配置标题',
        'description.require' => '请设置配置描述',
        'sort.require' => '请设置排序',
        'created_time.require' => '请设置创建时间',
        'updated_time.require' => '请设置更新时间',
    ];
}
