<?php

declare(strict_types=1);

use think\facade\Route;

Route::group('api/auth', function () {
    Route::get('login', 'LoginController@mobile');
})->namespace('app\api\auth\controller');
