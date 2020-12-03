<?php

declare(strict_types=1);

use Hyperf\HttpServer\Router\Router;

Router::get('/monitor', function () {
    return json_encode(['heartbeat' => time()]);
});
