<?php

declare(strict_types=1);

namespace app\bundles\article\request\articleTag;

use OpenApi\Attributes as OA;
use think\Validate;

#[OA\Schema(
    schema: 'ArticleTagCreateRequest',
    required: [
        'id',
        'article_id',
        'tag_id',
        'created_time',
    ],
    properties: [
        new OA\Property(property: 'id', description: 'ID', type: 'integer'),
        new OA\Property(property: 'article_id', description: '文章ID', type: 'integer'),
        new OA\Property(property: 'tag_id', description: '标签ID', type: 'integer'),
        new OA\Property(property: 'created_time', description: '创建时间', type: 'string'),
    ]
)]
class ArticleTagCreateRequest extends Validate
{
    protected $rule = [
        'id' => 'require',
        'article_id' => 'require',
        'tag_id' => 'require',
        'created_time' => 'require',
    ];

    protected $message = [
        'id.require' => '请设置ID',
        'article_id.require' => '请设置文章ID',
        'tag_id.require' => '请设置标签ID',
        'created_time.require' => '请设置创建时间',
    ];
}
