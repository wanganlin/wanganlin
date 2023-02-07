<?php

declare(strict_types=1);

namespace app\controller\web;

use think\captcha\facade\Captcha;
use think\Response;

class CaptchaController extends BaseController
{
    /**
     * @return Response
     */
    public function index(): Response
    {
        return Captcha::create();
    }
}
