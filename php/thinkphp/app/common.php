<?php

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

if (! function_exists('resource_path')) {
    /**
     * 获取资源文件目录
     */
    function resource_path(string $path = ''): string
    {
        return base_path('resource').ltrim($path, '/');
    }
}

if (! function_exists('theme')) {
    /**
     * 主题文件链接
     */
    function theme(string $path = ''): string
    {
        return asset('themes/default/'.ltrim($path, '/'));
    }
}
