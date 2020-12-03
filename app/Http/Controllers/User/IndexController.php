<?php

declare(strict_types=1);

namespace App\Http\Controllers\User;

use App\Http\Controllers\AbstractController;
use Hyperf\HttpServer\Annotation\Controller;
use Hyperf\HttpServer\Annotation\GetMapping;
use Psr\Http\Message\ResponseInterface;

/**
 * @Controller(prefix="api/user")
 * Class UserController
 * @package App\Http\Controllers\User
 */
class IndexController extends AbstractController
{
    /**
     * @GetMapping(path="dashboard")
     * @return ResponseInterface
     */
    public function index()
    {
        return $this->succeed('user');
    }
}
