<?php

declare(strict_types=1);

namespace app\api\auth\controller;

use app\controller\Controller;
use app\middleware\RedirectIfAuthenticated;

abstract class BaseController extends Controller
{
    protected array $middleware = [
        RedirectIfAuthenticated::class,
    ];
}
