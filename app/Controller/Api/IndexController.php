<?php

declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AbstractController;
use Hyperf\HttpServer\Annotation\Controller;
use Hyperf\HttpServer\Annotation\GetMapping;
use Psr\Http\Message\ResponseInterface;

/**
 * @Controller(prefix="api")
 * Class IndexController
 * @package App\Controller\Api
 */
class IndexController extends AbstractController
{
    /**
     * @GetMapping(path="")
     * @return ResponseInterface
     */
    public function index(): ResponseInterface
    {
        return $this->succeed([
            'message' => 'Hello API',
        ]);
    }
}
