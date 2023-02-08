<?php

namespace app\services\user;

use app\models\User;

class UserService
{
    public function findUserById(int $id): User
    {
        return User::findOne(['id' => $id]);
    }
}
