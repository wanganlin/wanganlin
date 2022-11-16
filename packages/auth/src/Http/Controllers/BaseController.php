<?php

declare(strict_types=1);

namespace App\Packages\Auth\Http\Controllers;

use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }
}
