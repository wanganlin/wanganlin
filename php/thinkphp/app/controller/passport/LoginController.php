<?php

declare(strict_types=1);

namespace app\controller\passport;

use app\bundle\auth\service\input\LoginInput;
use app\bundle\auth\service\LoginBundleService;
use app\controller\passport\request\LoginRequest;
use app\foundation\exception\CustomException;
use think\exception\ValidateException;
use think\facade\Log;
use think\Request;
use think\response\Json;
use think\response\Redirect;
use think\response\View;
use Throwable;

class LoginController extends BaseController
{
    public function index(Request $request): Redirect|View
    {
        $callback = $request->get('callback', '/');

        return view('index', ['callback' => urldecode($callback)]);
    }

    public function mobile(Request $request): Json
    {
        try {
            $formData = $request->post();

            $v = new LoginRequest();
            if (! $v->check($formData)) {
                throw new CustomException($v->getError());
            }

            $loginInput = new LoginInput();
            $loginInput->setUsername($formData['username']);
            $loginInput->setPassword($formData['password']);
            $loginInput->setRememberMe($formData['remember'] === 'on');

            $loginBundleService = new LoginBundleService();
            if ($loginBundleService->login($loginInput)) {
                return $this->success('ok');
            }

            throw new CustomException('登录失败');
        } catch (Throwable $e) {
            Log::error($e);

            if ($e instanceof CustomException || $e instanceof ValidateException) {
                return $this->error($e->getMessage());
            }

            return $this->error('请求错误，请稍后再试。');
        }
    }
}
