<?php

declare(strict_types=1);

namespace app\api\admin\controller;

use app\constant\AuthConst;
use app\middleware\Authenticate;
use app\middleware\Authorization;
use Juling\Foundation\Response\JsonResponse;
use Juling\Foundation\Routing\Controller;
use OpenApi\Attributes as OA;
use OpenApi\Attributes\Contact;

#[OA\Info(version: '1.0', description: '公共接口', title: '管理API文档', contact: new Contact('API Develop Team'))]
#[OA\Server(url: '/api/admin', description: '开发环境')]
#[OA\SecurityScheme(securityScheme: 'bearerAuth', type: 'http', description: 'JWT 认证信息', name: 'Authorization', in: 'header', bearerFormat: 'JWT', scheme: 'bearer')]
abstract class BaseController extends Controller
{
    use JsonResponse;

    protected array $middleware = [
        [Authenticate::class, [AuthConst::Admin]],
        Authorization::class,
    ];
}
