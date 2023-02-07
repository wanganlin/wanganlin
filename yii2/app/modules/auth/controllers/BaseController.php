<?php

namespace app\modules\auth\controllers;

use app\controllers\BaseController as Controller;
use app\modules\auth\filters\RedirectIfAuthenticated;

class BaseController extends Controller
{
    /**
     * @return array
     */
    public function behaviors(): array
    {
        return [
            [
                'class' => RedirectIfAuthenticated::class,
            ],
        ];
    }
}
