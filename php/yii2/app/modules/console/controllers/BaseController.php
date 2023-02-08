<?php

namespace app\modules\console\controllers;

use app\controllers\BaseController as Controller;
use app\modules\console\filters\Authenticate;

abstract class BaseController extends Controller
{
    /**
     * @return array
     */
    public function behaviors(): array
    {
        return [
            [
                'class' => Authenticate::class,
            ],
        ];
    }
}
