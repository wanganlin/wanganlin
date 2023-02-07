<?php

declare(strict_types=1);

namespace app\controller\console;

use app\controller\Controller;
use app\enums\GlobalConst;
use app\middleware\Authenticate;
use app\middleware\Privilege;

abstract class BaseController extends Controller
{
    /**
     * @var array
     */
    protected array $middleware = [
        [Authenticate::class, [GlobalConst::CONSOLE_MODULE]],
        Privilege::class,
    ];
}
