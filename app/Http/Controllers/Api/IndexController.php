<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Http\Controllers\AbstractController;
use Hyperf\HttpServer\Annotation\AutoController;
use Hyperf\HttpServer\Annotation\PostMapping;

/**
 * @AutoController(prefix="api")
 * Class IndexController
 * @package App\Http\Controllers\Api
 */
class IndexController extends AbstractController
{
    /**
     * @return array
     */
    public function index()
    {
        return [
            'message' => 'Hello API',
        ];
    }
}
