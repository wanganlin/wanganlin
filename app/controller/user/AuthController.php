<?php

declare(strict_types=1);

namespace app\controller\user;

use app\controller\Controller;
use app\middleware\RedirectIfAuthenticated;
use app\request\user\auth\ForgetRequest;
use app\request\user\auth\LoginRequest;
use app\request\user\auth\RegisterRequest;
use app\request\user\auth\ResetRequest;
use think\exception\ValidateException;
use think\Request;
use think\response\Json;

class AuthController extends Controller
{
    /**
     * @var array
     */
    protected array $middleware = [
        [RedirectIfAuthenticated::class, ['user']],
    ];

    /**
     * @param Request $request
     * @return Json
     */
    public function login(Request $request): Json
    {
        try {
            validate(LoginRequest::class)->check($request->post());
        } catch (ValidateException $e) {
            return $this->error($e->getError());
        }

        return $this->success('data');
    }

    /**
     * @param Request $request
     * @return Json
     */
    public function register(Request $request): Json
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
     * @return Json
     */
    public function forgot(Request $request): Json
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
     * @return Json
     */
    public function reset(Request $request): Json
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
     * @return Json
     */
    public function connect(Request $request): Json
    {
        return $this->success('data');
    }

    /**
     * @param Request $request
     * @return Json
     */
    public function callback(Request $request): Json
    {
        return $this->success('data');
    }
}
