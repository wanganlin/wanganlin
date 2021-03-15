<?php

declare(strict_types=1);

namespace App\Model;

/**
 * Class User
 * @package App\Model
 */
class User extends Model
{
    /**
     * @var string
     */
    protected $table = 'users';

    /**
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * @var array
     */
    protected $hidden = [
        'password',
    ];
}
