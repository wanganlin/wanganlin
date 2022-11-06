<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use App\Services\Captcha\CaptchaService;
use Exception;
use Illuminate\Http\Response;
use Spatie\RouteDiscovery\Attributes\Route;

class CaptchaController extends BaseController
{
    /**
     * 响应验证码图片流
     *
     * @return Response
     * @throws Exception
     */
    #[Route(fullUri: 'captcha')]
    public function index(): Response
    {
        $captchaService = new CaptchaService();

        return $captchaService->create();
    }
}
