<?php

declare(strict_types=1);

namespace App\Http\Controllers\User;

use App\Http\Controllers\AbstractController;
use Hyperf\HttpServer\Annotation\Controller;
use Hyperf\HttpServer\Annotation\PostMapping;
use Psr\Http\Message\ResponseInterface;

/**
 * @Controller(prefix="api/user/auth")
 * Class AuthController
 * @package App\Http\Controllers\User
 */
class AuthController extends AbstractController
{
    /**
     * @PostMapping("login")
     * @return ResponseInterface
     */
    public function login()
    {
        return $this->succeed([
            'method' => 'handle',
            'message' => 'Login',
        ]);
    }

    /**
     * @PostMapping("register")
     * @return ResponseInterface
     */
    public function register()
    {
        return $this->succeed([
            'method' => 'handle',
            'message' => 'Register',
        ]);
    }
}
