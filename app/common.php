<?php

use app\support\Str;

if (! function_exists('asset')) {
    /**
     * 生成资源文件链接
     *
     * @param  string  $path
     * @return string
     */
    function asset(string $path = ''): string
    {
        $root = request()->root(true);

        return $root.'/'.ltrim($path, '/').'?v='.RELEASE;
    }
}

if (! function_exists('is_email')) {
    /**
     * 验证邮箱地址格式
     *
     * @param $email
     * @return bool
     */
    function is_email($email): bool
    {
        return ! (filter_var($email, FILTER_VALIDATE_EMAIL) === false);
    }
}

if (! function_exists('is_mobile')) {
    /**
     * 验证手机号码格式
     *
     * @param $mobile
     * @return bool
     */
    function is_mobile($mobile): bool
    {
        $rule = '/^1[3-9]\d{9}$/';

        return is_scalar($mobile) && 1 === preg_match($rule, (string) $mobile);
    }
}

if (! function_exists('route')) {
    /**
     * 路由链接url
     *
     * @param  string  $path
     * @param  array   $vars
     * @return string
     */
    function route(string $path = '', array $vars = []): string
    {
        if (Str::substr($path, 0, 1) !== '/') {
            $pathInfo = request()->pathinfo();
            $pathList = array_pad(explode('/', $pathInfo), 3, 'index');

            [$m, $c, $a] = array_pad(explode('/', $path), 3, null);
            if (is_null($c)) {
                $path = $pathList[0] . '/' . $pathList[1] . '/' . $m;
            } elseif (is_null($a)) {
                $path = $pathList[0] . '/' . $c . '/' . $m;
            }
            $path = '/' . $path;
        }

        return url($path, $vars);
    }
}

if (! function_exists('theme')) {
    /**
     * 主题文件链接
     *
     * @param  string  $path
     * @return string
     */
    function theme(string $path = ''): string
    {
        return asset('themes/default/'.ltrim($path, '/'));
    }
}
