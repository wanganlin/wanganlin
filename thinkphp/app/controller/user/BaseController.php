<?php

declare(strict_types=1);

namespace app\controller\user;

use app\controller\web\BaseController as Controller;
use app\enums\GlobalConst;
use app\middleware\Authenticate;

abstract class BaseController extends Controller
{
    /**
     * @var array
     */
    protected array $middleware = [
        [Authenticate::class, [GlobalConst::USER_MODULE]],
    ];
}
