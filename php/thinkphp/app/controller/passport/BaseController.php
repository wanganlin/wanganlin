<?php

declare(strict_types=1);

namespace app\controller\passport;

use app\controller\Controller;
use app\middleware\RedirectIfAuthenticated;

abstract class BaseController extends Controller
{
    protected array $middleware = [
        RedirectIfAuthenticated::class,
    ];
}
