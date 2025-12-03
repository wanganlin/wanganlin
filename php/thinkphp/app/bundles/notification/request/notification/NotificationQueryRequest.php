<?php

declare(strict_types=1);

namespace app\bundles\notification\request\notification;

use OpenApi\Attributes as OA;
use think\Validate;

#[OA\Schema(
    schema: 'NotificationQueryRequest',
    required: [

    ],
    properties: [

    ]
)]
class NotificationQueryRequest extends Validate
{
    protected $rule = [

    ];

    protected $message = [

    ];
}
