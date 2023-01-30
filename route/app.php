<?php

use app\enums\GlobalConst;
use think\facade\Route;
use think\helper\Str;

// 自定义控制台入口
Route::get('/admin', function () {
    session(GlobalConst::SYSTEM_TOKEN, Str::random());
    return redirect('/console');
});

// 自动化路由
$dirs = glob(app_path('controller/*'), GLOB_ONLYDIR);
foreach ($dirs as $dir) {
    $m = basename($dir);
    $v = $m === config('app.default_app') ? '' : $m;
    Route::group($v, function () {
        Route::get(':c/:a', ':c/:a');
        Route::post(':c/:a', ':c/:aHandle');
        Route::get(':c', ':c/index');
        Route::get('/', 'Index/index');
    })->prefix($m.'.');
}
