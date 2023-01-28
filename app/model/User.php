<?php

declare(strict_types=1);

namespace app\model;

use think\Model;

class User extends Model
{
    /**
     * @var string
     */
    protected $table = 'user';

    /**
     * @var string
     */
    protected $pk = 'id';

    /**
     * @return BelongsToMany
     */
    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(AuthGroup::class, AuthGroupAccess::class);
    }
}
