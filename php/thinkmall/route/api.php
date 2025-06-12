<?php

declare(strict_types=1);

$routes = glob(app_path('api/*/route.php'));
foreach ($routes as $route) {
    require $route;
}
