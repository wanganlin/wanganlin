<?php

declare(strict_types=1);

use Psr\Container\ContainerInterface;

if (!function_exists('app')) {
    /**
     * @param null $id
     * @return mixed
     */
    function app($id = null)
    {
        $container = \Hyperf\Utils\ApplicationContext::getContainer();

        if (is_null($id)) {
            return $container;
        } else {
            return $container->get($id);
        }
    }
}

if (!function_exists('csrf_token')) {
    /**
     * Get the CSRF token value.
     * @return string
     */
    function csrf_token(): string
    {
        $session = app(\Hyperf\Contract\SessionInterface::class);

        if ($session->has('CSRF_TOKEN')) {
            return $session->get('CSRF_TOKEN');
        }

        $csrfToken = \Hyperf\Utils\Str::random(40);
        $session->set('CSRF_TOKEN', $csrfToken);

        return $csrfToken;
    }
}

if (!function_exists('csrf_field')) {
    /**
     * Generate a CSRF token form field.
     * @param string $name
     * @return string
     */
    function csrf_field($name = '_token'): string
    {
        return '<input type="hidden" name="' . $name . '" value="' . csrf_token() . '">';
    }
}

if (!function_exists('stdLog')) {
    /**
     * 控制台日志
     * @return mixed|ContainerInterface
     */
    function stdLog(): ContainerInterface
    {
        return app(\Hyperf\Contract\StdoutLoggerInterface::class);
    }
}

if (!function_exists('logger')) {
    /**
     * 文件日志
     * @param string $name
     * @param string $group
     * @return mixed
     */
    function logger($name = 'hyperf', $group = 'default')
    {
        return app(\Hyperf\Logger\LoggerFactory::class)->get($name, $group);
    }
}

if (!function_exists('redis')) {
    /**
     * redis 客户端实例
     * @return mixed|ContainerInterface
     */
    function redis(): ContainerInterface
    {
        return app(Hyperf\Redis\Redis::class);
    }
}

if (!function_exists('cache')) {
    /**
     * 缓存实例 简单的缓存
     * @return mixed|ContainerInterface
     */
    function cache(): ContainerInterface
    {
        return app(\Psr\SimpleCache\CacheInterface::class);
    }
}

if (!function_exists('encrypt')) {
    /**
     * 加密函数
     * @param string $string 加密前的字符串
     * @param string $key 密钥
     * @return string 加密后的字符串
     */
    function encrypt(string $string, $key = ''): string
    {
        $coded = '';
        $keyLength = strlen($key);

        for ($i = 0, $count = strlen($string); $i < $count; $i += $keyLength) {
            $coded .= substr($string, $i, $keyLength) ^ $key;
        }

        return str_replace('=', '', base64_encode($coded));
    }
}

if (!function_exists('decrypt')) {
    /**
     * 解密函数
     * @param string $string 加密后的字符串
     * @param string $key 密钥
     * @return string 加密前的字符串
     */
    function decrypt(string $string, $key = ''): string
    {
        $coded = '';
        $keyLength = strlen($key);
        $str = base64_decode($string);

        for ($i = 0, $count = strlen($str); $i < $count; $i += $keyLength) {
            $coded .= substr($str, $i, $keyLength) ^ $key;
        }

        return $coded;
    }
}

if (!function_exists('page')) {
    /**
     * 计算总页数等
     * @param int $pageSize
     * @param int $currPage
     * @param $totalCount
     * @return array
     */
    function page($totalCount, int $pageSize = 10, int $currPage = 1): array
    {
        if ($totalCount > 0) {
            $totalPage = ceil($totalCount / $pageSize);
        } else {
            $totalPage = 0;
        }

        if ($currPage <= 0 || $currPage > $totalPage) {
            $currPage = 1;
        }

        $startCount = ($currPage - 1) * $pageSize;
        return array($totalPage, $startCount);
    }
}

if (!function_exists('url')) {
    /**
     * 返回URL链接
     * @param string $url
     * @param array $param
     * @return mixed|string
     */
    function url($url = '', $param = []): string
    {
        $query = empty($param) ? '' : '?' . http_build_query($param, '', '&');

        return '/' . ltrim($url, '/') . $query;
    }
}

if (!function_exists('asset')) {
    /**
     * 返回静态资源url
     * @param string $url
     * @return mixed
     */
    function asset($url = ''): string
    {
        // $request = app(\Hyperf\HttpServer\Contract\RequestInterface::class);

        return '/' . ltrim($url);
    }
}

if (!function_exists('skin')) {
    /**
     * 返回主题资源url
     * @param string $url
     * @return mixed
     */
    function skin($url = ''): string
    {
        $theme = env('TEMPLATE_THEME', 'default');

        return asset('themes/' . $theme . '/' . ltrim($url, '/'));
    }
}

if (!function_exists('is_mobile')) {
    /**
     * 检查手机号码格式
     * @param string $mobile 手机号码
     * @return bool
     */
    function is_mobile(string $mobile): bool
    {
        if (preg_match('/1[3-9]\d{9}$/', $mobile) || preg_match('/000\d{8}$/', $mobile)) {
            return true;
        }

        return false;
    }
}
