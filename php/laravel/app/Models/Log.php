<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'logs';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

}
