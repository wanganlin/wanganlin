<?php

declare(strict_types=1);

namespace app\controller;

use think\Request;

class ErrorController extends BaseController
{
    public function index(Request $request)
    {
        return "page not found.";
    }
}
