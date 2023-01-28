<?php

declare(strict_types=1);

namespace app\controller\api;

use OpenApi\Generator;

class IndexController extends BaseController
{
    /**
     * @OA\Info(title="PHPCMS API", version="1.0")
     * @package app\controller\api
     * @return string
     */
    public function index(): string
    {
        $openapi = Generator::scan([app_path('controller')]);
        return $openapi->toYaml();
    }
}
