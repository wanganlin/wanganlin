<?php

declare(strict_types=1);

namespace app\bundles\attachment\request\attachmentCategory;

use OpenApi\Attributes as OA;
use think\Validate;

#[OA\Schema(
    schema: 'AttachmentCategoryQueryRequest',
    required: [

    ],
    properties: [

    ]
)]
class AttachmentCategoryQueryRequest extends Validate
{
    protected $rule = [

    ];

    protected $message = [

    ];
}
