<?php

declare(strict_types=1);

namespace App\Http\Controllers\Console;

use App\Http\Controllers\AbstractController;
use Hyperf\HttpServer\Annotation\Controller;
use Hyperf\HttpServer\Annotation\GetMapping;
use Hyperf\HttpServer\Annotation\PostMapping;

/**
 * @Controller(prefix="admin")
 * Class AuthController
 * @package App\Http\Controllers\Console
 */
class AuthController extends AbstractController
{
    /**
     * @GetMapping("login")
     * @return array
     */
    public function login()
    {
        return $this->render('auth.login');
    }

    /**
     * @PostMapping("login")
     * @return array
     */
    public function loginHandler()
    {
        return [
            'method' => 'handle',
            'message' => 'Login',
        ];
    }
}
