<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use App\Http\Requests\Auth\ResetRequest;
use App\Services\Auth\ResetService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Spatie\RouteDiscovery\Attributes\Route;

class ResetController extends BaseController
{
    /**
     * 显示重置密码表单
     *
     * @param Request $request
     * @return RedirectResponse|Renderable
     */
    #[Route(fullUri: 'reset')]
    public function index(Request $request): RedirectResponse|Renderable
    {
        $forgetHash = Session::get('forget_hash');
        if ($forgetHash !== $request->query('token')) {
            return redirect()->back();
        }

        return view('auth.reset', [
            'page_title' => '重置密码',
            'token' => Str::random(),
        ]);
    }

    /**
     * 重置密码
     *
     * @param ResetRequest $request
     * @return JsonResponse
     */
    #[Route(method: 'post', fullUri: 'reset')]
    public function reset(ResetRequest $request): JsonResponse
    {
        $data = $request->validated();

        $forgetHash = Session::get('forget_hash');
        if ($forgetHash !== $data['token']) {
            return $this->error('重置密码的验证码错误');
        }

        $resetService = new ResetService();
        if ($resetService->reset($data['username'], $data['password'])) {
            return $this->success('ok');
        }

        return $this->error('密码重置失败');
    }
}
