<?php

declare(strict_types=1);

namespace app\controller;

use think\facade\Config;

abstract class BaseController extends Controller
{
    protected function initialize(): void
    {
        $default = config('app.default_theme', 'default');

        Config::set([
            'view_dir_name' => 'public/themes/'.$default.'/html',
        ], 'view');
    }
}
