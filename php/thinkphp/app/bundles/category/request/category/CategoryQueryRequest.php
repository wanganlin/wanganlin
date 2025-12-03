<?php

declare(strict_types=1);

namespace app\bundles\category\request\category;

use OpenApi\Attributes as OA;
use think\Validate;

#[OA\Schema(
    schema: 'CategoryQueryRequest',
    required: [

    ],
    properties: [

    ]
)]
class CategoryQueryRequest extends Validate
{
    protected $rule = [

    ];

    protected $message = [

    ];
}
