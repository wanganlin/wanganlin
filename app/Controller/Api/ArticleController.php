<?php

declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AbstractController;
use Hyperf\HttpServer\Annotation\AutoController;
use Hyperf\HttpServer\Contract\ResponseInterface;

/**
 * @AutoController(prefix="api/article")
 * Class ArticleController
 * @package App\Controller\Api
 */
class ArticleController extends AbstractController
{
    /**
     * @return ResponseInterface
     */
    public function index(): ResponseInterface
    {
        return $this->succeed([
            'message' => 'api article index',
        ]);
    }

    /**
     * @return ResponseInterface
     */
    public function detail(): ResponseInterface
    {
        return $this->succeed([
            'message' => 'api article detail',
        ]);
    }
}
