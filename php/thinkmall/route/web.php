<?php

declare(strict_types=1);

use app\middleware\Authenticate;
use app\middleware\RedirectIfAuthenticated;
use think\facade\Route;

Route::group('admin', function() {
    Route::view('/', 'admin/index');
})->middleware(Authenticate::class);

Route::group('passport', function() {
    Route::view('login', 'auth/login');
})->middleware(RedirectIfAuthenticated::class);
