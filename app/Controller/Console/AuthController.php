<?php

declare(strict_types=1);

namespace App\Controller\Console;

use App\Controller\AbstractController;
use Hyperf\HttpServer\Annotation\Controller;
use Hyperf\HttpServer\Annotation\GetMapping;
use Hyperf\HttpServer\Annotation\PostMapping;
use Psr\Http\Message\ResponseInterface;

/**
 * @Controller(prefix="admin")
 * Class AuthController
 * @package App\Controller\Console
 */
class AuthController extends AbstractController
{
    /**
     * @GetMapping("login")
     * @return ResponseInterface
     */
    public function login(): ResponseInterface
    {
        return $this->render('auth.login');
    }

    /**
     * @PostMapping("login")
     * @return ResponseInterface
     */
    public function loginHandler(): ResponseInterface
    {
        return $this->succeed(['admin auth login']);
    }
}
