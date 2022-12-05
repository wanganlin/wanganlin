<?php

use app\support\Carbon;
use yii\helpers\Url;
use yii\web\Response;

if (!function_exists('base_path')) {
    /**
     * 获取应用程序的根目录路径
     * @param string $path
     * @return string
     */
    function base_path(string $path = ''): string
    {
        return Yii::getAlias('@root') . '/' . $path;
    }
}

if (!function_exists('app_path')) {
    /**
     * 获取应用程序文件夹的路径
     * @param string $path
     * @return string
     */
    function app_path(string $path = ''): string
    {
        return base_path('app/' . $path);
    }
}

if (!function_exists('config_path')) {
    /**
     * 获取配置路径
     * @param string $path
     * @return string
     */
    function config_path(string $path = ''): string
    {
        return base_path('config/' . $path);
    }
}

if (!function_exists('database_path')) {
    /**
     * 获取数据库路径
     * @param string $path
     * @return string
     */
    function database_path(string $path = ''): string
    {
        return base_path('database/' . $path);
    }
}

if (!function_exists('resource_path')) {
    /**
     * 获取resources文件夹的路径.
     * @param string $path
     * @return string
     */
    function resource_path(string $path = ''): string
    {
        return base_path('resources/' . $path);
    }
}

if (!function_exists('lang_path')) {
    /**
     * 获取语言文件夹的路径
     * @param string $path
     * @return string
     */
    function lang_path(string $path = ''): string
    {
        return resource_path('lang/' . $path);
    }
}

if (!function_exists('public_path')) {
    /**
     * 获取公共文件夹的路径
     * @param string $path
     * @return string
     */
    function public_path(string $path = ''): string
    {
        return base_path('public/' . $path);
    }
}

if (!function_exists('storage_path')) {
    /**
     * 获取存储文件夹的路径.
     * @param string $path
     * @return string
     */
    function storage_path(string $path = ''): string
    {
        return base_path('storage/' . $path);
    }
}

if (!function_exists('asset')) {
    /**
     * 生成应用程序静态资源链接
     * @param string $url
     * @return string
     */
    function asset(string $url): string
    {
        return rtrim(Yii::$app->getHomeUrl(), '/') . '/' . ltrim($url, '/');
    }
}

if (!function_exists('decrypt')) {
    /**
     * 解密数据
     * @param string $value
     * @return bool|string
     */
    function decrypt(string $value): bool|string
    {
        return Yii::$app->getSecurity()->decryptByPassword($value, Yii::$app->getRequest()->cookieValidationKey);
    }
}

if (!function_exists('encrypt')) {
    /**
     * 加密数据
     * @param mixed $value
     * @return string
     */
    function encrypt(mixed $value): string
    {
        return Yii::$app->getSecurity()->encryptByPassword($value, Yii::$app->getRequest()->cookieValidationKey);
    }
}

if (!function_exists('now')) {
    /**
     * 为当前时间创建一个新的Carbon实例
     * @return Carbon
     */
    function now(): Carbon
    {
        return Carbon::now(Yii::$app->timeZone);
    }
}

if (!function_exists('today')) {
    /**
     * 为当前日期创建一个新的Carbon实例
     * @return Carbon
     */
    function today(): Carbon
    {
        return Carbon::today(Yii::$app->timeZone);
    }
}

if (!function_exists('redirect')) {
    /**
     * 获取重定向器的实例
     * @param $url
     * @param int $statusCode
     * @param bool $checkAjax
     * @return Response
     */
    function redirect($url, int $statusCode = 302, bool $checkAjax = true): Response
    {
        return Yii::$app->getResponse()->redirect($url, $statusCode, $checkAjax);
    }
}

if (!function_exists('url')) {
    /**
     * 为应用程序生成一个url
     * @param string $url
     * @param bool $scheme
     * @return string
     */
    function url(string $url = '', bool $scheme = false): string
    {
        return Url::to($url, $scheme);
    }
}
