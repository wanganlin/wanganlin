<?php

declare(strict_types=1);

namespace App\Http\Controllers\User;

use App\Http\Controllers\AbstractController;
use Hyperf\HttpServer\Annotation\Controller;
use Hyperf\HttpServer\Annotation\GetMapping;
use Hyperf\HttpServer\Annotation\PostMapping;

/**
 * @Controller(prefix="user")
 * Class AuthController
 * @package App\Http\Controllers\User
 */
class AuthController extends AbstractController
{
    /**
     * @GetMapping("login")
     * @return array
     */
    public function login()
    {
        return $this->render('frontend::login');
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

    /**
     * @GetMapping("register")
     * @return array
     */
    public function register()
    {
        return $this->render('frontend::register');
    }

    /**
     * @PostMapping("register")
     * @return array
     */
    public function registerHandler()
    {
        return [
            'method' => 'handle',
            'message' => 'Register',
        ];
    }
}
