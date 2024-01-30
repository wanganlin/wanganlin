<?php

declare(strict_types=1);

namespace app\controller\passport;

use app\bundle\auth\service\input\LoginInput;
use app\bundle\auth\service\LoginBundleService;
use think\exception\ValidateException;
use think\Request;
use think\response\Json;
use think\response\Redirect;
use think\response\View;

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
            validate(LoginRequest::class)->check($request->post());
        } catch (ValidateException $e) {
            return $this->error($e->getError());
        }

        $loginInput = new LoginInput();
        $loginInput->setUsername($request->post('username'));
        $loginInput->setPassword($request->post('password'));
        $loginInput->setRememberMe($request->post('remember') === 'on');

        try {
            $loginService = new LoginBundleService();
            $loginService->login($loginInput);
            return $this->success('ok');
        } catch (\Exception $e) {
            return $this->error($e->getMessage());
        }
    }
}
