<?php

return [
    'key' => env('APP_KEY', 'example_key'),
    'payload' => [
        // 签发者
        'iss' => env('APP_URL', 'http://localhost'),
        // 接收者
        'aud' => env('APP_URL', 'http://localhost'),
        // 签发时间
        'iat' => now()->timestamp,
        // 某个时间点后才能访问
        'nbf' => now()->timestamp,
        // 过期时间，默认一个月
        'exp' => now()->addMonths()->timestamp,
    ],
];
