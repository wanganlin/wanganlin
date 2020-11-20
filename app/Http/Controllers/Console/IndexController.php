<?php

declare(strict_types=1);

namespace App\Http\Controllers\Console;

use App\Http\Controllers\AbstractController;
use App\Http\Middleware\AuthMiddleware;
use Hyperf\HttpServer\Annotation\AutoController;
use Hyperf\HttpServer\Annotation\Middleware;

/**
 * @AutoController(prefix="admin")
 * @Middleware(AuthMiddleware::class)
 * Class IndexController
 * @package App\Http\Controllers\Console
 */
class IndexController extends AbstractController
{
    /**
     * @return mixed
     */
    public function index()
    {
        return $this->render('index');
    }
}
