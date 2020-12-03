<?php

declare(strict_types=1);

namespace App\Http\Controllers\Console;

use App\Http\Controllers\AbstractController;
use Hyperf\HttpServer\Annotation\Controller;
use Hyperf\HttpServer\Annotation\GetMapping;
use Psr\Http\Message\ResponseInterface;

/**
 * @Controller(prefix="api/console")
 * Class IndexController
 * @package App\Http\Controllers\Console
 */
class IndexController extends AbstractController
{
    /**
     * @GetMapping(path="dashboard")
     * @return ResponseInterface
     */
    public function index()
    {
        return $this->succeed('admin dashboard');
    }
}
