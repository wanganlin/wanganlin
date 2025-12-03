<?php

declare(strict_types=1);

namespace app\api\portal\controller;

use OpenApi\Attributes as OA;
use think\response\Json;

class IndexController extends BaseController
{
    #[OA\Get(path: '/home', summary: '门户首页接口', security: [['bearerAuth' => []]], tags: ['门户模块'])]
    #[OA\Response(response: 200, description: 'OK')]
    public function index(): Json
    {
        return $this->success('门户首页接口 ok');
    }
}
