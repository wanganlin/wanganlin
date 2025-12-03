<?php

declare(strict_types=1);

namespace app\bundles\navigation\request\navigation;

use OpenApi\Attributes as OA;
use think\Validate;

#[OA\Schema(
    schema: 'NavigationQueryRequest',
    required: [

    ],
    properties: [

    ]
)]
class NavigationQueryRequest extends Validate
{
    protected $rule = [

    ];

    protected $message = [

    ];
}
