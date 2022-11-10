<?php

declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AbstractController;
use Hyperf\HttpServer\Annotation\AutoController;
use Psr\Http\Message\ResponseInterface;

#[AutoController(prefix: 'api/article')]
class ArticleController extends AbstractController
{
    /**
     * @return ResponseInterface
     */
    public function index(): ResponseInterface
    {
        return $this->success([
            'message' => 'api article index',
        ]);
    }

    /**
     * @return ResponseInterface
     */
    public function detail(): ResponseInterface
    {
        return $this->success([
            'message' => 'api article detail',
        ]);
    }
}
