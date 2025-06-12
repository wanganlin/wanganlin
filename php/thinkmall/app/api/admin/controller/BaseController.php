<?php

declare(strict_types=1);

namespace app\api\admin\controller;

use app\controller\Controller;
use app\constant\GlobalConst;
use app\middleware\Authenticate;
use app\middleware\Privilege;

abstract class BaseController extends Controller
{
    protected array $middleware = [
        Authenticate::class,
        Privilege::class,
    ];

    protected function initialize(): void
    {
        if (! session('?'.GlobalConst::ConsoleToken)) {
             redirect('/')->send();
             exit();
        }
    }
}
