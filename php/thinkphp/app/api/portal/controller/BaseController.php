<?php

declare(strict_types=1);

namespace app\api\portal\controller;

use Juling\Foundation\Response\JsonResponse;
use Juling\Foundation\Routing\Controller;
use OpenApi\Attributes as OA;
use OpenApi\Attributes\Contact;

#[OA\Info(version: '1.0', description: '公共接口', title: '门户API文档', contact: new Contact('API Develop Team'))]
#[OA\Server(url: '/api/portal', description: '开发环境')]
abstract class BaseController extends Controller
{
    use JsonResponse;
}
