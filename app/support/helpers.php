<?php

use app\support\Carbon;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\Application;
use yii\web\Cookie;
use yii\web\CookieCollection;
use yii\web\Request;
use yii\web\Response;
use yii\web\Session;
use yii\web\User;
use yii\web\View;

if (!function_exists('app')) {
    /**
     * 获取可用的容器实例
     * @param string|null $abstract
     * @return Application|null
     */
    function app(string $abstract = null): ?Application
    {
        $app = Yii::$app;

        if (is_null($abstract)) {
            return $app;
        }

        if ($app->has($abstract)) {
            return $app->$abstract;
        }

        throw new RuntimeException('Application component not set.');
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

if (!function_exists('asset')) {
    /**
     * 生成应用程序静态资源链接
     * @param string $url
     * @return string
     */
    function asset(string $url): string
    {
        return rtrim(app()->getHomeUrl(), '/') . '/' . ltrim($url, '/');
    }
}

if (!function_exists('auth')) {
    /**
     * 获取可用的认证实例
     * @return User
     */
    function auth(): User
    {
        return app()->getUser();
    }
}

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

if (!function_exists('cache')) {
    /**
     * 缓存管理
     * @param $name 缓存名称
     * @param $value 缓存值
     * @param int|null $duration 缓存过期前默认持续时间(以秒为单位)。
     * @return mixed
     */
    function cache($name, $value, int $duration = null)
    {
        $cache = app()->getCache();

        if (is_null($name)) {
            return $cache;
        }

        if ('' === $value) {
            // 获取缓存
            return str_starts_with($name, '?') ? $cache->exists(substr($name, 1)) : $cache->get($name);
        } elseif (is_null($value)) {
            // 删除缓存
            return $cache->delete($name);
        }

        // 缓存数据
        return $cache->set($name, $value, $duration);
    }
}

if (!function_exists('config')) {
    /**
     * 获取/设置指定的配置值
     * @param array|string|null $key
     * @param mixed $default
     * @return mixed
     */
    function config($key = null, $default = null)
    {
        if (is_null($key)) {
            return Yii::$app->params;
        }

        if (is_array($key)) {
            Yii::$app->params = array_merge(Yii::$app->params, $key);
        }

        return Yii::$app->params[$key] ?? $default;
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

if (!function_exists('cookie')) {
    /**
     * 创建一个新的cookie实例
     * @param $name
     * @param $value
     * @param int $minutes
     * @param string $path
     * @param string $domain
     * @param bool $secure
     * @param bool $httpOnly
     * @param string $sameSite
     * @return void|CookieCollection
     */
    function cookie($name = null, $value = null, int $minutes = 0, string $path = '/', string $domain = '', bool $secure = false, bool $httpOnly = true, string $sameSite = Cookie::SAME_SITE_LAX)
    {
        $cookies = app()->getResponse()->getCookies();

        if (is_null($name)) {
            return $cookies;
        }

        $cookies->add(new Cookie([
            'name' => $name,
            'value' => $value,
            'domain' => $domain,
            'expire' => now()->addMinutes($minutes)->timestamp,
            'path' => $path,
            'secure' => $secure,
            'httpOnly' => $httpOnly,
            'sameSite' => $sameSite
        ]));
    }
}

if (!function_exists('csrf_field')) {
    /**
     * 生成CSRF令牌表单字段
     * @return string
     */
    function csrf_field(): string
    {
        return Html::hiddenInput(app()->getRequest()->csrfParam, csrf_token());
    }
}

if (!function_exists('csrf_token')) {
    /**
     * 获取CSRF令牌值
     * @return string
     */
    function csrf_token(): string
    {
        return app()->getRequest()->getCsrfToken();
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

if (!function_exists('decrypt')) {
    /**
     * 解密数据
     * @param string $value
     * @return bool|string
     */
    function decrypt(string $value): bool|string
    {
        return app()->getSecurity()->decryptByPassword($value, app()->getRequest()->cookieValidationKey);
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
        return app()->getSecurity()->encryptByPassword($value, app()->getRequest()->cookieValidationKey);
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
        return base_path('lang/' . $path);
    }
}

if (!function_exists('now')) {
    /**
     * 为当前时间创建一个新的Carbon实例
     * @return Carbon
     */
    function now(): Carbon
    {
        return Carbon::now(app()->timeZone);
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
        return app()->getResponse()->redirect($url, $statusCode, $checkAjax);;
    }
}

if (!function_exists('request')) {
    /**
     * 获取当前请求的实例
     * @param $key
     * @param $default
     * @return array|mixed|Request
     */
    function request($key = null, $default = null): mixed
    {
        $request = app()->getRequest();

        if (is_null($key)) {
            return $request;
        }

        return $request->get($key, $default);
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

if (!function_exists('response')) {
    /**
     * 从应用程序返回一个新的响应
     * @return Response
     */
    function response(): Response
    {
        return app()->getResponse();
    }
}

if (!function_exists('session')) {
    /**
     * 获取/设置指定的会话值
     * @param $key
     * @param $default
     * @return mixed|void|Session
     */
    function session($key = null, $default = null)
    {
        $session = app()->getSession();

        if (is_null($key)) {
            return $session;
        }

        if (is_array($key)) {
            return $session->set(key($key), current($key));
        }

        return $session->get($key, $default);
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

if (!function_exists('today')) {
    /**
     * 为当前日期创建一个新的Carbon实例
     * @return Carbon
     */
    function today(): Carbon
    {
        return Carbon::today(app()->timeZone);
    }
}

if (!function_exists('trans')) {
    /**
     * 翻译给定的消息
     * @param $key
     * @param array $replace
     * @param $locale
     * @return string
     */
    function trans($key = null, array $replace = [], $locale = null): string
    {
        // todo
        return '';
    }
}

if (!function_exists('__')) {
    /**
     * 翻译给定的消息
     * @param $key
     * @param array $replace
     * @param $locale
     * @return string
     */
    function __($key = null, array $replace = [], $locale = null): string
    {
        if (is_null($key)) {
            return $key;
        }

        return trans($key, $replace, $locale);
    }
}

if (!function_exists('url')) {
    /**
     * 为应用程序生成一个url
     * @param string $path
     * @param array $parameters
     * @param bool $secure
     * @return string
     */
    function url(string $path = '', array $parameters = [], bool $secure = false): string
    {
        if (!empty($parameters)) {
            $path .= '?' . http_build_query($parameters, '', '&');
        }

        return Url::to($path, $secure);
    }
}

if (!function_exists('view')) {
    /**
     * 获取给定视图的求值视图内容
     * @param string $view
     * @param array $data
     * @return View
     */
    function view(string $view = '', array $data = []): View
    {
        return app()->getView();
    }
}
