<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Http\Controllers\AbstractController;
use Hyperf\HttpServer\Annotation\Controller;
use Hyperf\HttpServer\Annotation\GetMapping;
use Psr\Http\Message\ResponseInterface;

/**
 * @Controller(prefix="api/article")
 * Class ArticleController
 * @package App\Http\Controllers\Api
 */
class ArticleController extends AbstractController
{
    /**
     * @GetMapping(path="")
     * @return ResponseInterface
     */
    public function index(): ResponseInterface
    {
        return $this->succeed([
            'message' => 'api article index',
        ]);
    }

    /**
     * @GetMapping(path="detail")
     * @return ResponseInterface
     */
    public function detail(): ResponseInterface
    {
        return $this->succeed([
            'message' => 'api article detail',
        ]);
    }
}
