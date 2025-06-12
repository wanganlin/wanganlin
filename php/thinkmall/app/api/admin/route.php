<?php

declare(strict_types=1);

use think\facade\Route;

Route::group('api/admin', function () {
    Route::get('/', 'IndexController@index');
    Route::get('/dashboard', 'IndexController@dashboard');
})->namespace('app\api\admin\controller');