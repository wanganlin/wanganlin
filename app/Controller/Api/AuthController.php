<?php

declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AbstractController;
use Hyperf\HttpServer\Annotation\AutoController;
use Hyperf\HttpServer\Contract\ResponseInterface;

/**
 * @AutoController(prefix="api")
 * Class AuthController
 * @package App\Controller\Api
 */
class AuthController extends AbstractController
{
    /**
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
