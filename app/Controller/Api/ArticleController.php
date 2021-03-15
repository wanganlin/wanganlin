<?php

declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AbstractController;
use Hyperf\HttpServer\Annotation\Controller;
use Hyperf\HttpServer\Annotation\GetMapping;
use Psr\Http\Message\ResponseInterface;

/**
 * @Controller(prefix="api/article")
 * Class ArticleController
 * @package App\Controller\Api
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
