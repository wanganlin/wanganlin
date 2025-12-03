<?php

declare(strict_types=1);

namespace app\bundles\tag\request\tag;

use OpenApi\Attributes as OA;
use think\Validate;

#[OA\Schema(
    schema: 'TagQueryRequest',
    required: [

    ],
    properties: [

    ]
)]
class TagQueryRequest extends Validate
{
    protected $rule = [

    ];

    protected $message = [

    ];
}
