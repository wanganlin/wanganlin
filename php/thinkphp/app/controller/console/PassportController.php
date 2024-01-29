<?php

declare(strict_types=1);

namespace app\controller\console;

use app\controller\console\request\passport\ForgetRequest;
use app\controller\console\request\passport\LoginRequest;
use app\controller\console\request\passport\ResetRequest;
use app\controller\Controller;
use app\constant\GlobalConst;
use app\middleware\RedirectIfAuthenticated;
use app\bundle\auth\service\input\LoginInput;
use app\bundle\auth\service\LoginBundleService;
use think\exception\ValidateException;
use think\Request;
use think\response\Json;
use think\response\Redirect;
use think\response\View;

class PassportController extends Controller
{
    /**
     * @var array
     */
    protected array $middleware = [
        [RedirectIfAuthenticated::class, [GlobalConst::CONSOLE_MODULE]],
    ];

    /**
     * 显示登录页面
     *
     * @param Request $request
     * @return Redirect|View
     */
    public function login(Request $request): Redirect|View
    {
        $callback = $request->get('callback', '/');

        if (!session('?' . GlobalConst::SYSTEM_TOKEN)) {
            return redirect('/');
        }

        return view('login', ['callback' => urldecode($callback)]);
    }

    /**
     * 登录操作
     *
     * @param Request $request
     * @return Json
     */
    public function loginHandle(Request $request): Json
    {
        if (!session('?' . GlobalConst::SYSTEM_TOKEN)) {
            return $this->error('Illegal request');
        }

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
            $loginService->login($loginInput, GlobalConst::CONSOLE_MODULE);
            return $this->success('ok');
        } catch (\Exception $e) {
            return $this->error($e->getMessage());
        }
    }

    /**
     * @param Request $request
     * @return View
     */
    public function forgot(Request $request): View
    {
        return view('forgot');
    }

    /**
     * @param Request $request
     * @return Json
     */
    public function forgotHandle(Request $request): Json
    {
        try {
            validate(ForgetRequest::class)->check($request->post());
        } catch (ValidateException $e) {
            return $this->error($e->getError());
        }

        return $this->success('');
    }

    /**
     * @param Request $request
     * @return View
     */
    public function reset(Request $request): View
    {
        $token = $request->get('token');

        // todo check

        return view('reset');
    }

    /**
     * @param Request $request
     * @return Json
     */
    public function resetHandle(Request $request): Json
    {
        try {
            validate(ResetRequest::class)->check($request->post());
        } catch (ValidateException $e) {
            return $this->error($e->getError());
        }

        return $this->success('');
    }
}
