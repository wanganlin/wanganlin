<?php

declare(strict_types=1);

namespace app\bundles\banner\request\banner;

use OpenApi\Attributes as OA;
use think\Validate;

#[OA\Schema(
    schema: 'BannerQueryRequest',
    required: [

    ],
    properties: [

    ]
)]
class BannerQueryRequest extends Validate
{
    protected $rule = [

    ];

    protected $message = [

    ];
}
