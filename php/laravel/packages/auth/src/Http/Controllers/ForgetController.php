<?php

declare(strict_types=1);

namespace App\Packages\Auth\Http\Controllers;

use App\Http\Requests\Auth\ForgetRequest;
use App\Services\Auth\ForgetService;
use App\Services\User\UserService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Spatie\RouteDiscovery\Attributes\Route;

class ForgetController extends BaseController
{
    /**
     * 显示忘记密码表单
     *
     * @return Renderable
     */
    #[Route(fullUri: 'forget')]
    public function index(): Renderable
    {
        return view('auth.forget', [
            'page_title' => '忘记密码',
        ]);
    }

    /**
     * 找回密码
     *
     * @param ForgetRequest $request
     * @return JsonResponse
     */
    #[Route(method: 'post', fullUri: 'forget')]
    public function forget(ForgetRequest $request): JsonResponse
    {
        $data = $request->validated();

        $userService = new UserService();
        $userOutput = $userService->getUserByEmail($data['email']);
        if (is_null($userOutput)) {
            return $this->error('用户或邮箱地址不正确');
        }

        $forgetService = new ForgetService();
        $code = encrypt($data['email'] . '@' . Str::random());
        if ($forgetService->email($data['email'], $code)) {
            Session::put('forget_hash', $code);

            return $this->success('ok');
        }

        return $this->error('邮件发送失败');
    }
}
