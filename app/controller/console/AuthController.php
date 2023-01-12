<?php

declare(strict_types=1);

namespace app\controller\console;

use app\controller\Controller;
use app\middleware\RedirectIfAuthenticated;
use app\request\console\auth\LoginRequest;
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
        [RedirectIfAuthenticated::class, ['console']],
    ];

    /**
     * @return Redirect
     */
    public function index(): Redirect
    {
        return redirect('auth/login');
    }

    /**
     * @param  Request  $request
     * @return Json|View
     */
    public function login(Request $request): Json|View
    {
        if ($request->isPost()) {
            try {
                validate(LoginRequest::class)->check($request->post());
            } catch (ValidateException $e) {
                return json(['error' => $e->getError()]);
            }
        }

        return view('login');
    }

    /**
     * @return Json|View
     */
    public function forgot(): Json|View
    {
        return view('forgot');
    }

    /**
     * @return Json|View
     */
    public function reset(): Json|View
    {
        return view('reset');
    }
}
