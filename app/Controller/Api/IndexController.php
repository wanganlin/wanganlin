<?php

declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AbstractController;
use Hyperf\HttpServer\Annotation\AutoController;
use Hyperf\HttpServer\Contract\ResponseInterface;
use Psr\Http\Message\ResponseInterface as Psr7ResponseInterface;

/**
 * @AutoController(prefix="api")
 * Class IndexController
 * @package App\Controller\Api
 */
class IndexController extends AbstractController
{
    /**
     * @return ResponseInterface
     */
    public function index(): Psr7ResponseInterface
    {
        return $this->succeed([
            'message' => 'Hello API',
        ]);
    }
}
