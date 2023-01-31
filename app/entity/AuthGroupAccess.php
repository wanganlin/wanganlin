<?php

declare(strict_types=1);

namespace app\entity;

use app\model\Pivot;

class AuthGroupAccess extends Pivot
{
    /**
     * @var string
     */
    protected $table = 'auth_group_access';
}
