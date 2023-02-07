<?php

declare(strict_types=1);

namespace app\controller\user;

use app\enums\GlobalConst;
use app\middleware\RedirectIfAuthenticated;
use app\request\user\auth\ForgetRequest;
use app\request\user\auth\LoginRequest;
use app\request\user\auth\RegisterRequest;
use app\request\user\auth\ResetRequest;
use app\controller\web\BaseController as Controller;
use app\service\auth\input\LoginInput;
use app\service\auth\LoginService;
use think\exception\ValidateException;
use think\Request;
use think\response\Json;
use think\response\Redirect;
use think\response\View;

class AuthController extends Controller
{
    /**
     * @var array
     */
    protected array $middleware = [
        [RedirectIfAuthenticated::class, [GlobalConst::USER_MODULE]],
    ];

    public function login(Request $request): View
    {
        return view('login');
    }

    /**
     * @param Request $request
     * @return Json
     */
    public function loginHandle(Request $request): Json
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
            $loginService = new LoginService();
            $loginService->login($loginInput, GlobalConst::USER_MODULE);
            return $this->success('ok');
        } catch (\Exception $e) {
            return $this->error($e->getMessage());
        }
    }

    /**
     * @param Request $request
     * @return View
     */
    public function register(Request $request): View
    {
        return view('register');
    }

    /**
     * @param Request $request
     * @return Json
     */
    public function registerHandle(Request $request): Json
    {
        try {
            validate(RegisterRequest::class)->check($request->post());
        } catch (ValidateException $e) {
            return $this->error($e->getError());
        }

        return $this->success('data');
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

        return $this->success('data');
    }

    /**
     * @param Request $request
     * @return View
     */
    public function reset(Request $request): View
    {
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

        return $this->success('data');
    }

    /**
     * @param Request $request
     * @return Redirect
     */
    public function connect(Request $request): Redirect
    {
        return redirect('/');
    }

    /**
     * @param Request $request
     * @return Redirect
     */
    public function callback(Request $request): Redirect
    {
        return redirect('/');
    }

    /**
     * @param Request $request
     * @return View
     */
    public function bind(Request $request): View
    {
        return view('bind');
    }

    /**
     * @param Request $request
     * @return Json
     */
    public function bindHandle(Request $request): Json
    {
        return $this->success('data');
    }
}
