<?php

declare(strict_types=1);

namespace app\bundles\system\request\systemPermission;

use OpenApi\Attributes as OA;
use think\Validate;

#[OA\Schema(
    schema: 'SystemPermissionQueryRequest',
    required: [

    ],
    properties: [

    ]
)]
class SystemPermissionQueryRequest extends Validate
{
    protected $rule = [

    ];

    protected $message = [

    ];
}
