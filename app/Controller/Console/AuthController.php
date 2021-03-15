<?php

declare(strict_types=1);

namespace App\Controller\Console;

use App\Controller\AbstractController;
use Hyperf\HttpServer\Annotation\AutoController;
use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\HttpServer\Contract\ResponseInterface;
use Hyperf\ViewEngine\Contract\Renderable;

/**
 * @AutoController(prefix="admin")
 * Class AuthController
 * @package App\Controller\Console
 */
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
        return $this->succeed(['admin auth login']);
    }
}
