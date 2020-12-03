<?php

declare(strict_types=1);

namespace App\Http\Controllers\Console;

use App\Http\Controllers\AbstractController;
use Hyperf\HttpServer\Annotation\Controller;
use Hyperf\HttpServer\Annotation\PostMapping;
use Psr\Http\Message\ResponseInterface;

/**
 * @Controller(prefix="api/console/auth")
 * Class AuthController
 * @package App\Http\Controllers\Console
 */
class AuthController extends AbstractController
{
    /**
     * @PostMapping("login")
     * @return ResponseInterface
     */
    public function login()
    {
        return $this->succeed(['auth login']);
    }
}
