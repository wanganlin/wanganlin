<?php

declare(strict_types=1);

namespace app\api\user\controller;

use app\controller\Controller;
use app\middleware\Authenticate;

abstract class BaseController extends Controller
{
    protected array $middleware = [
        Authenticate::class,
    ];
}
