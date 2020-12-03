<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Http\Controllers\AbstractController;
use Hyperf\HttpServer\Annotation\Controller;
use Hyperf\HttpServer\Annotation\PostMapping;
use Psr\Http\Message\ResponseInterface;

/**
 * @Controller(prefix="api")
 * Class AuthController
 * @package App\Http\Controllers\Api
 */
class AuthController extends AbstractController
{
    /**
     * @PostMapping("login")
     * @return ResponseInterface
     */
    public function login(): ResponseInterface
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
    public function register(): ResponseInterface
    {
        return $this->succeed([
            'method' => 'handle',
            'message' => 'Register',
        ]);
    }
}
