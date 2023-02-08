<?php

use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Illuminate\Support\Facades\Log;

if (!function_exists('is_email')) {
    /**
     * 验证邮箱地址格式
     * @param $email
     * @return bool
     */
    function is_email($email): bool
    {
        return !(filter_var($email, FILTER_VALIDATE_EMAIL) === false);
    }
}

if (!function_exists('is_mobile')) {
    /**
     * 验证手机号码格式
     * @param $mobile
     * @return bool
     */
    function is_mobile($mobile): bool
    {
        $rule = '/^1[3-9]\d{9}$/';

        return is_scalar($mobile) && 1 === preg_match($rule, (string)$mobile);
    }
}

if (!function_exists('skin')) {
    /**
     * @param string $path
     * @return string
     */
    function skin(string $path): string
    {
        return url('/') . '/themes/default/' . ltrim($path, '/') . '?v=' . config('app.version');
    }
}

if (!function_exists('jwt_encode')) {
    /**
     * JWT生成
     * @param array $payload
     * @return string
     */
    function jwt_encode(array $payload): string
    {
        $config = config('jwt');

        $payload = array_merge($config['payload'], ['body' => $payload]);

        return JWT::encode($payload, $config['key'], 'HS256');
    }
}

if (!function_exists('jwt_decode')) {
    /**
     * JWT解析
     * @param string $jwt
     * @return array
     */
    function jwt_decode(string $jwt): array
    {
        try {
            $config = config('jwt');

            $decoded = JWT::decode($jwt, new Key($config['key'], 'HS256'));

            return (array)$decoded->body;
        } catch (Exception $e) {
            Log::error($e->getMessage());

            return [];
        }
    }
}
