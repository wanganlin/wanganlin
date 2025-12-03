<?php

declare(strict_types=1);

namespace app\bundles\page\request\page;

use OpenApi\Attributes as OA;
use think\Validate;

#[OA\Schema(
    schema: 'PageQueryRequest',
    required: [

    ],
    properties: [

    ]
)]
class PageQueryRequest extends Validate
{
    protected $rule = [

    ];

    protected $message = [

    ];
}
