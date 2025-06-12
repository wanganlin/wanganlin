<?php

declare(strict_types=1);

namespace app\api\shop\controller;

use app\controller\Controller;
use OpenApi\Attributes as OA;
use OpenApi\Attributes\Contact;

#[OA\Info(version: '1.0', description: '用户认证平台', title: 'API文档', contact: new Contact('API Develop Team'))]
#[OA\Server(url: '/', description: '开发环境')]
abstract class BaseController extends Controller
{
}
