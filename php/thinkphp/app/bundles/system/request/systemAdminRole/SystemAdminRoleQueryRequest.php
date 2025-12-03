<?php

declare(strict_types=1);

namespace app\bundles\system\request\systemAdminRole;

use OpenApi\Attributes as OA;
use think\Validate;

#[OA\Schema(
    schema: 'SystemAdminRoleQueryRequest',
    required: [

    ],
    properties: [

    ]
)]
class SystemAdminRoleQueryRequest extends Validate
{
    protected $rule = [

    ];

    protected $message = [

    ];
}
