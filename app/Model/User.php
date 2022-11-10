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
    protected ?string $table = 'users';

    /**
     * @var string
     */
    protected string $primaryKey = 'id';

    /**
     * @var array
     */
    protected array $hidden = [
        'password',
    ];
}
