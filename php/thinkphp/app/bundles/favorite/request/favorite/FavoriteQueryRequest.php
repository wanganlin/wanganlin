<?php

declare(strict_types=1);

namespace app\bundles\favorite\request\favorite;

use OpenApi\Attributes as OA;
use think\Validate;

#[OA\Schema(
    schema: 'FavoriteQueryRequest',
    required: [

    ],
    properties: [

    ]
)]
class FavoriteQueryRequest extends Validate
{
    protected $rule = [

    ];

    protected $message = [

    ];
}
