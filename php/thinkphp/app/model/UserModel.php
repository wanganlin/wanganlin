<?php

declare(strict_types=1);

namespace app\model;

use think\Model;
use think\model\relation\BelongsToMany;

class UserModel extends Model
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
