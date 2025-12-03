<?php

declare(strict_types=1);

namespace app\api\user\controller;

use OpenApi\Attributes as OA;
use think\response\Json;

class IndexController extends BaseController
{
    #[OA\Get(path: '/dashboard', summary: '用户首页接口', security: [['bearerAuth' => []]], tags: ['用户模块'])]
    #[OA\Response(response: 200, description: 'OK')]
    public function index(): Json
    {
        return $this->success('用户首页接口 ok');
    }
}
