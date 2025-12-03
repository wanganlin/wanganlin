<?php

declare(strict_types=1);

namespace app\bundles\setting\request\setting;

use OpenApi\Attributes as OA;
use think\Validate;

#[OA\Schema(
    schema: 'SettingQueryRequest',
    required: [

    ],
    properties: [

    ]
)]
class SettingQueryRequest extends Validate
{
    protected $rule = [

    ];

    protected $message = [

    ];
}
