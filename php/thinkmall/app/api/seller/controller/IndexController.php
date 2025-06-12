<?php

declare(strict_types=1);

namespace app\api\seller\controller;

use OpenApi\Attributes as OA;
use think\response\Json;

class IndexController extends BaseController
{
    #[OA\Get(path: '/api', summary: 'API接口', tags: ['默认'])]
    #[OA\Response(response: 200, description: 'OK')]
    public function index(): Json
    {
        return $this->success('api server.');
    }
}
