<?php

declare(strict_types=1);

namespace app\bundles\login\request\loginLog;

use OpenApi\Attributes as OA;
use think\Validate;

#[OA\Schema(
    schema: 'LoginLogQueryRequest',
    required: [

    ],
    properties: [

    ]
)]
class LoginLogQueryRequest extends Validate
{
    protected $rule = [

    ];

    protected $message = [

    ];
}
