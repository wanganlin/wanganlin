<?php

declare(strict_types=1);

namespace App\Services\User;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class UserService
{
    /**
     * 获取用户信息
     *
     * @param string $column
     * @param string $value
     * @return \Illuminate\Database\Eloquent\Builder|Model|object|null
     */
    public function getUserByColumn(string $column, string $value)
    {
        return User::query()->where($column, $value)->first();
    }
}
