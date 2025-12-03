<?php

declare(strict_types=1);

namespace app\bundles\article\request\articleTag;

use OpenApi\Attributes as OA;
use think\Validate;

#[OA\Schema(
    schema: 'ArticleTagQueryRequest',
    required: [

    ],
    properties: [

    ]
)]
class ArticleTagQueryRequest extends Validate
{
    protected $rule = [

    ];

    protected $message = [

    ];
}
