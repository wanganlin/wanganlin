<?php

if (!function_exists('asset')) {
    /**
     * @param string $path
     * @return string
     */
    function asset(string $path = ''): string
    {
        $root = request()->root(true);
        return $root . '/' . ltrim($path, '/') . '?v=' . RELEASE;
    }
}

if (!function_exists('theme')) {
    /**
     * @param string $path
     * @return string
     */
    function theme(string $path = ''): string
    {
        return asset('themes/default/' . ltrim($path, '/'));
    }
}
