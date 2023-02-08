<?php

declare(strict_types=1);

namespace App\Model;

class User extends Model
{
    /**
     * @var string|null
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
