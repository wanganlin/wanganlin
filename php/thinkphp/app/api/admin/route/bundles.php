<?php

declare(strict_types=1);

use think\facade\Route;

Route::group('admin', function () {
    $routes = glob(app_path().'bundles/*/route/route.php');
    foreach ($routes as $route) {
        require $route;
    }
});
