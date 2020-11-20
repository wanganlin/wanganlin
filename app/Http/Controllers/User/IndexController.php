<?php

declare(strict_types=1);

namespace App\Http\Controllers\User;

use App\Http\Controllers\AbstractController;
use App\Http\Middleware\AuthMiddleware;
use Hyperf\HttpServer\Annotation\AutoController;
use Hyperf\HttpServer\Annotation\Middleware;

/**
 * @AutoController(prefix="user")
 * @Middleware(AuthMiddleware::class)
 * Class UserController
 * @package App\Http\Controllers\User
 */
class IndexController extends AbstractController
{
    /**
     * @return mixed
     */
    public function index()
    {
        return $this->render('frontend::user');
    }
}
