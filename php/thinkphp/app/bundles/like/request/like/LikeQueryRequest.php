<?php

declare(strict_types=1);

namespace app\bundles\like\request\like;

use OpenApi\Attributes as OA;
use think\Validate;

#[OA\Schema(
    schema: 'LikeQueryRequest',
    required: [

    ],
    properties: [

    ]
)]
class LikeQueryRequest extends Validate
{
    protected $rule = [

    ];

    protected $message = [

    ];
}
