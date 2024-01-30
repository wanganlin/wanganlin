<?php

use app\foundation\constant\GlobalConst;
use app\support\Str;
use think\facade\Route;

Route::get('/admin', function () {
    session(GlobalConst::ConsoleToken, Str::random());

    return redirect('/console');
});

$paths = glob(app_path('controller/*'), GLOB_ONLYDIR);
foreach ($paths as $path) {
    $m = basename($path);
    $v = $m === config('app.default_app') ? '' : $m;
    Route::group($v, function () {
        Route::get(':c/:a', ':c/:a');
        Route::post(':c/:a', ':c/:a');
        Route::put(':c/:a', ':c/:a');
        Route::delete(':c/:a', ':c/:a');
        Route::get(':c', ':c/index');
        Route::get('/', 'Index/index');
    })->prefix($m.'.');
}
