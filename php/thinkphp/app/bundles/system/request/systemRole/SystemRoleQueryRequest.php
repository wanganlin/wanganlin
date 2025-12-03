<?php

declare(strict_types=1);

namespace app\bundles\system\request\systemRole;

use OpenApi\Attributes as OA;
use think\Validate;

#[OA\Schema(
    schema: 'SystemRoleQueryRequest',
    required: [

    ],
    properties: [

    ]
)]
class SystemRoleQueryRequest extends Validate
{
    protected $rule = [

    ];

    protected $message = [

    ];
}
