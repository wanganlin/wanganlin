<?php

declare(strict_types=1);

use Psr\Container\ContainerExceptionInterface;
use Psr\Container\ContainerInterface;
use Psr\Container\NotFoundExceptionInterface;

if (!function_exists('app')) {
    /**
     * @return ContainerInterface
     */
    function app(): ContainerInterface
    {
        return Hyperf\Utils\ApplicationContext::getContainer();
    }
}

if (!function_exists('csrf_token')) {
    /**
     * Get the CSRF token value.
     * @return string
     */
    function csrf_token(): string
    {
        try {
            $session = app()->get(Hyperf\Contract\SessionInterface::class);

            if ($session->has('CSRF_TOKEN')) {
                return $session->get('CSRF_TOKEN');
            }

            $csrfToken = Hyperf\Utils\Str::random(40);
            $session->set('CSRF_TOKEN', $csrfToken);

            return $csrfToken;
        } catch (NotFoundExceptionInterface|ContainerExceptionInterface $e) {
            return '';
        }
    }
}

if (!function_exists('csrf_field')) {
    /**
     * Generate a CSRF token form field.
     * @param string $name
     * @return string
     */
    function csrf_field(string $name = '_token'): string
    {
        return '<input type="hidden" name="' . $name . '" value="' . csrf_token() . '">';
    }
}

if (!function_exists('url')) {
    /**
     * 返回URL链接
     * @param string $url
     * @param array $param
     * @return string
     */
    function url(string $url = '', array $param = []): string
    {
        $query = empty($param) ? '' : '?' . http_build_query($param, '', '&');

        return '/' . ltrim($url, '/') . $query;
    }
}

if (!function_exists('asset')) {
    /**
     * 返回静态资源url
     * @param string $url
     * @return string
     */
    function asset(string $url = ''): string
    {
        return '/' . ltrim($url);
    }
}

if (!function_exists('skin')) {
    /**
     * 返回主题资源url
     * @param string $url
     * @return string
     */
    function skin(string $url = ''): string
    {
        $theme = env('TEMPLATE_THEME', 'default');

        return asset('themes/' . $theme . '/' . ltrim($url, '/'));
    }
}
