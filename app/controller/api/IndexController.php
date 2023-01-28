<?php

declare(strict_types=1);

namespace app\controller\api;

use OpenApi\Generator;

class IndexController extends BaseController
{
    /**
     * @OA\Info(title="JBCMS API", version="1.0")
     *
     * @return string
     */
    public function index(): string
    {
        $openapi = Generator::scan([app_path('controller')]);

        return $openapi->toYaml();
    }
}
