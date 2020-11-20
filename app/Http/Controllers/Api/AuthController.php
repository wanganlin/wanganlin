<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Http\Controllers\AbstractController;
use Hyperf\HttpServer\Annotation\Controller;
use Hyperf\HttpServer\Annotation\PostMapping;

/**
 * @Controller(prefix="api/auth")
 * Class AuthController
 * @package App\Http\Controllers\Api
 */
class AuthController extends AbstractController
{
    /**
     * @PostMapping("login")
     * @return array
     */
    public function login()
    {
        return [
            'method' => 'handle',
            'message' => 'Login',
        ];
    }

    /**
     * @PostMapping("register")
     * @return array
     */
    public function register()
    {
        return [
            'method' => 'handle',
            'message' => 'Register',
        ];
    }
}
