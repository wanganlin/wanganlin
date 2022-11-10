<?php

declare(strict_types=1);

namespace App\Controller\User;

use App\Controller\AbstractController;
use Hyperf\HttpServer\Annotation\AutoController;
use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\ViewEngine\Contract\Renderable;
use Psr\Http\Message\ResponseInterface;

#[AutoController(prefix: 'user')]
class AuthController extends AbstractController
{
    /**
     * @return Renderable
     */
    public function login(): Renderable
    {
        return $this->render('login');
    }

    /**
     * @param RequestInterface $request
     * @return ResponseInterface
     */
    public function loginHandler(RequestInterface $request): ResponseInterface
    {
        return $this->success([
            'method' => 'handle',
            'message' => 'Login',
        ]);
    }

    /**
     * @return Renderable
     */
    public function register(): Renderable
    {
        return $this->render('register');
    }

    /**
     * @param RequestInterface $request
     * @return ResponseInterface
     */
    public function registerHandler(RequestInterface $request): ResponseInterface
    {
        return $this->success([
            'method' => 'handle',
            'message' => 'Register',
        ]);
    }
}
