<?php

declare(strict_types=1);

namespace App\Controller\Console;

use App\Controller\AbstractController;
use Hyperf\HttpServer\Annotation\AutoController;
use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\ViewEngine\Contract\Renderable;
use Psr\Http\Message\ResponseInterface;

#[AutoController(prefix: 'admin')]
class AuthController extends AbstractController
{
    /**
     * @return Renderable
     */
    public function login(): Renderable
    {
        return $this->render('auth.login');
    }

    /**
     * @param RequestInterface $request
     * @return ResponseInterface
     */
    public function loginHandler(RequestInterface $request): ResponseInterface
    {
        return $this->success(['admin auth login']);
    }
}
