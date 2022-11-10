<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use App\Http\Requests\Auth\LoginRequest;
use App\Services\Auth\LoginService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\JsonResponse;
use Spatie\RouteDiscovery\Attributes\Route;

class LoginController extends BaseController
{
    /**
     * 显示登录表单
     *
     * @return Renderable
     */
    #[Route(fullUri: 'login')]
    public function showLoginForm(): Renderable
    {
        return view('auth.login', [
            'page_title' => '登录',
        ]);
    }

    /**
     * 登录操作
     *
     * @param LoginRequest $request
     * @return JsonResponse
     */
    #[Route(method: 'post', fullUri: 'login')]
    public function login(LoginRequest $request): JsonResponse
    {
        $data = $request->validated();

        $loginService = new LoginService();
        $loginType = $this->getLoginType($data['username']);
        if (call_user_func_array([$loginService, $loginType], [$data['username'], $data['password']])) {
            return $this->success('ok');
        }

        return $this->error('用户名或密码错误');
    }

    /**
     * 获取登录类型
     *
     * @param string $username
     * @return string
     */
    private function getLoginType(string $username): string
    {
        if (is_email($username)) {
            return 'email';
        } elseif (is_mobile($username)) {
            return 'mobile';
        } else {
            return 'username';
        }
    }
}
