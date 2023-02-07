<?php

declare(strict_types=1);

use Hyperf\View\Mode;
use Hyperf\ViewEngine\HyperfViewEngine;

return [
    'engine' => HyperfViewEngine::class,
    'mode' => Mode::SYNC,
    'config' => [
        'view_path' => BASE_PATH . '/resources/views/',
        'cache_path' => BASE_PATH . '/runtime/views/',
        'charset' => 'UTF-8',
    ],

    # 自定义组件
    'components' => [
        // 'alert' => \App\View\Components\Alert::class
    ],

    # 视图命名空间 (用于扩展包中)
    'namespaces' => [
        'frontend' => BASE_PATH . '/public/themes/' . env('TEMPLATE_THEME', 'default') . '/html',
    ],
];
