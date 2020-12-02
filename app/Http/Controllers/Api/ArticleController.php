<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Http\Controllers\AbstractController;
use Hyperf\HttpServer\Annotation\AutoController;
use Hyperf\HttpServer\Annotation\PostMapping;

/**
 * @AutoController(prefix="api/article")
 * Class ArticleController
 * @package App\Http\Controllers\Api
 */
class ArticleController extends AbstractController
{
    /**
     * @return array
     */
    public function index()
    {
        return [
            'message' => 'Hello article index',
        ];
    }

    /**
     * @return array
     */
    public function detail()
    {
        return [
            'message' => 'Hello article detail',
        ];
    }
}
