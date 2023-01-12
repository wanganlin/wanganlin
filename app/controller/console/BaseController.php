<?php

declare(strict_types=1);

namespace app\controller\console;

use app\controller\Controller;
use app\middleware\Authenticate;

abstract class BaseController extends Controller
{
    /**
     * @var array
     */
    protected array $middleware = [
        [Authenticate::class, ['console']],
    ];

}
