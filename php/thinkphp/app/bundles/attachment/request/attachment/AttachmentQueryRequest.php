<?php

declare(strict_types=1);

namespace app\bundles\attachment\request\attachment;

use OpenApi\Attributes as OA;
use think\Validate;

#[OA\Schema(
    schema: 'AttachmentQueryRequest',
    required: [

    ],
    properties: [

    ]
)]
class AttachmentQueryRequest extends Validate
{
    protected $rule = [

    ];

    protected $message = [

    ];
}
