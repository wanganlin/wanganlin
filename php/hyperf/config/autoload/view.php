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

    // Autoload components.
    'autoload' => [
        'classes' => [
            'App\\View\\Component\\',
        ],
        'components' => [
            'components.', // BASE_PATH . '/storage/view/components/'
        ],
    ],

    # Custom components.
    'components' => [
        // 'other-alert' => \Other\ViewComponent\Alert::class
    ],

    # View namespaces. (Used for packages)
    'namespaces' => [
        'frontend' => BASE_PATH . '/public/themes/' . env('TEMPLATE_THEME', 'default') . '/html',
    ],
];
