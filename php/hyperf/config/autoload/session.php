<?php

declare(strict_types=1);

use Hyperf\Session\Handler;

return [
    'handler' => Handler\FileHandler::class,
    'options' => [
        'connection' => 'default',
        'path' => BASE_PATH . '/runtime/sessions',
        'gc_maxlifetime' => 1440,
        'session_name' => 'SESSION_ID',
        'domain' => null,
        'cookie_lifetime' => 5 * 60 * 60,
    ],
];
