<?php

declare(strict_types=1);

namespace App\Controller\Console;

use App\Controller\AbstractController;
use App\Middleware\AuthMiddleware;
use Hyperf\HttpServer\Annotation\AutoController;
use Hyperf\HttpServer\Annotation\Middleware;
use Hyperf\ViewEngine\Contract\Renderable;

#[AutoController(prefix: 'admin')]
#[Middleware(AuthMiddleware::class)]
class IndexController extends AbstractController
{
    /**
     * @return Renderable
     */
    public function index(): Renderable
    {
        return $this->render('dashboard');
    }
}
