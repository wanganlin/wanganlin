<?php

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
