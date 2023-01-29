<?php

declare(strict_types=1);

namespace app\controller\console;

use app\controller\Controller;
use app\middleware\RedirectIfAuthenticated;
use app\request\console\auth\ForgetRequest;
use app\request\console\auth\LoginRequest;
use app\request\console\auth\ResetRequest;
use think\exception\ValidateException;
use think\Request;
use think\response\Json;
use think\response\View;

class AuthController extends Controller
{
    /**
     * @var array
     */
    protected array $middleware = [
        [RedirectIfAuthenticated::class, ['console']],
    ];

    /**
     * @return View
     */
    public function login(): View
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

        return $this->success('');
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

        return $this->success('');
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

        return $this->success('');
    }
}
