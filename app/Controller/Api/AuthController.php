<?php

declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AbstractController;
use Hyperf\HttpServer\Annotation\AutoController;
use Psr\Http\Message\ResponseInterface;

#[AutoController(prefix: 'api')]
class AuthController extends AbstractController
{
    /**
     * @return ResponseInterface
     */
    public function login(): ResponseInterface
    {
        return $this->success([
            'method' => 'handle',
            'message' => 'Login',
        ]);
    }

    /**
     * @return ResponseInterface
     */
    public function register(): ResponseInterface
    {
        return $this->success([
            'method' => 'handle',
            'message' => 'Register',
        ]);
    }
}
