<?php

declare(strict_types=1);

namespace app\bundles\link\request\link;

use OpenApi\Attributes as OA;
use think\Validate;

#[OA\Schema(
    schema: 'LinkQueryRequest',
    required: [

    ],
    properties: [

    ]
)]
class LinkQueryRequest extends Validate
{
    protected $rule = [

    ];

    protected $message = [

    ];
}
