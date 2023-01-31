<?php

declare(strict_types=1);

namespace app\entity;

use app\model\BelongsToMany;
use think\Model;

class AuthGroup extends Model
{
    /**
     * @var string
     */
    protected $table = 'auth_groups';

    /**
     * @return BelongsToMany
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, AuthGroupAccess::class);
    }
}
