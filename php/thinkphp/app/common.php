<?php

declare(strict_types=1);

use app\support\MysqlClient;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use think\facade\Log;
use think\facade\Route;

if (! function_exists('asset')) {
    /**
     * 生成资源文件链接
     */
    function asset(string $path = ''): string
    {
        $root = request()->root(true);

        return $root.'/'.ltrim($path, '/');
    }
}

if (! function_exists('is_email')) {
    /**
     * 验证邮箱地址格式
     */
    function is_email($email): bool
    {
        return ! (filter_var($email, FILTER_VALIDATE_EMAIL) === false);
    }
}

if (! function_exists('is_mobile')) {
    /**
     * 验证手机号码格式
     */
    function is_mobile(string $mobile): bool
    {
        $rule = '/^1[3-9]\d{9}$/';

        return preg_match($rule, $mobile) === 1;
    }
}

if (! function_exists('route_rules')) {
    /**
     * 获取路由规则
     */
    function route_rules(): Closure
    {
        return function () {
            Route::get(':c/:a', ':c/:a');
            Route::post(':c/:a', ':c/:a');
            Route::put(':c/:a', ':c/:a');
            Route::delete(':c/:a', ':c/:a');
            Route::get(':c', ':c/index');
            Route::get('/', 'Index/index');
        };
    }
}

if (! function_exists('resource_path')) {
    /**
     * 获取资源文件目录
     */
    function resource_path(string $path = ''): string
    {
        return root_path('resource').ltrim($path, '/');
    }
}

if (! function_exists('theme')) {
    /**
     * 主题文件链接
     */
    function theme(string $path = '', string $default = ''): string
    {
        if (empty($default)) {
            $default = config('app.default_theme', 'default');
        }

        return asset('themes/'.$default.'/'.ltrim($path, '/'));
    }
}

if (! function_exists('table')) {
    /**
     * 获取表名
     */
    function table(string $tableName): string
    {
        return config('database.connections.'.config('database.default').'.prefix').$tableName;
    }
}

if (! function_exists('db')) {
    /**
     * 获取数据库连接
     */
    function db(): MysqlClient
    {
        static $mysqlClient = null;
        if ($mysqlClient === null) {
            $mysqlClient = new MysqlClient;
        }

        return $mysqlClient;
    }
}

if (! function_exists('getToken')) {
    /**
     * 获取Token
     */
    function getToken(string $token = '', string $key = ''): array
    {
        if (stripos($token, 'Bearer ') === 0) {
            $token = str_replace('Bearer ', '', $token);
        }

        try {
            $decoded = JWT::decode($token, new Key($key, 'HS256'));

            return (array) $decoded;
        } catch (Throwable $e) {
            Log::error($e);
        }

        return [];
    }
}
