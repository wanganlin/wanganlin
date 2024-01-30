<?php

declare(strict_types=1);

namespace app\controller\api;

use app\controller\Controller;
use OpenApi\Attributes as OA;
use think\response\Json;

class IndexController extends Controller
{
    #[OA\Get(path: '/api', summary: 'API接口', tags: ['默认'])]
    #[OA\Response(response: 200, description: 'OK')]
    public function index(): Json
    {
        return $this->success('api server.');
    }
}
