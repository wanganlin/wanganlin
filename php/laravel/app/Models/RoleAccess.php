<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoleAccess extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'role_access';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

}
