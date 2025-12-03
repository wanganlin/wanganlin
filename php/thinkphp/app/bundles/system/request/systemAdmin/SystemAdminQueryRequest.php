<?php

declare(strict_types=1);

namespace app\bundles\system\request\systemAdmin;

use OpenApi\Attributes as OA;
use think\Validate;

#[OA\Schema(
    schema: 'SystemAdminQueryRequest',
    required: [

    ],
    properties: [

    ]
)]
class SystemAdminQueryRequest extends Validate
{
    protected $rule = [

    ];

    protected $message = [

    ];
}
