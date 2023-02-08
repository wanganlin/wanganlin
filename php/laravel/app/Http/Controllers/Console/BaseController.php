<?php

declare(strict_types=1);

namespace App\Http\Controllers\Console;

use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
}
