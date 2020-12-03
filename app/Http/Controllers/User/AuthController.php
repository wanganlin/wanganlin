<?php

declare(strict_types=1);

namespace App\Http\Controllers\User;

use App\Http\Controllers\AbstractController;
use Hyperf\HttpServer\Annotation\Controller;
use Hyperf\HttpServer\Annotation\GetMapping;
use Hyperf\HttpServer\Annotation\PostMapping;
use Psr\Http\Message\ResponseInterface;

/**
 * @Controller(prefix="user")
 * Class AuthController
 * @package App\Http\Controllers\User
 */
class AuthController extends AbstractController
{
    /**
     * @GetMapping("login")
     * @return ResponseInterface
     */
    public function login(): ResponseInterface
    {
        return $this->display('login');
    }

    /**
     * @PostMapping("login")
     * @return ResponseInterface
     */
    public function loginHandler(): ResponseInterface
    {
        return $this->succeed([
            'method' => 'handle',
            'message' => 'Login',
        ]);
    }

    /**
     * @GetMapping("register")
     * @return ResponseInterface
     */
    public function register(): ResponseInterface
    {
        return $this->display('register');
    }

    /**
     * @PostMapping("register")
     * @return ResponseInterface
     */
    public function registerHandler(): ResponseInterface
    {
        return $this->succeed([
            'method' => 'handle',
            'message' => 'Register',
        ]);
    }
}
