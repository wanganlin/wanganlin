<?php

declare(strict_types=1);

namespace app\bundles\banner\request\bannerPosition;

use OpenApi\Attributes as OA;
use think\Validate;

#[OA\Schema(
    schema: 'BannerPositionQueryRequest',
    required: [

    ],
    properties: [

    ]
)]
class BannerPositionQueryRequest extends Validate
{
    protected $rule = [

    ];

    protected $message = [

    ];
}
