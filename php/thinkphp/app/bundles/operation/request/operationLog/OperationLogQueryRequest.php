<?php

declare(strict_types=1);

namespace app\bundles\operation\request\operationLog;

use OpenApi\Attributes as OA;
use think\Validate;

#[OA\Schema(
    schema: 'OperationLogQueryRequest',
    required: [

    ],
    properties: [

    ]
)]
class OperationLogQueryRequest extends Validate
{
    protected $rule = [

    ];

    protected $message = [

    ];
}
