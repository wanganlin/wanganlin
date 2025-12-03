<?php

declare(strict_types=1);

namespace app\bundles\dict\request\dict;

use OpenApi\Attributes as OA;
use think\Validate;

#[OA\Schema(
    schema: 'DictQueryRequest',
    required: [

    ],
    properties: [

    ]
)]
class DictQueryRequest extends Validate
{
    protected $rule = [

    ];

    protected $message = [

    ];
}
