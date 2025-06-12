<?php

declare(strict_types=1);

namespace app\api\auth\controller;

use app\exception\CustomException;
use think\exception\ValidateException;
use think\facade\Log;
use think\Request;
use think\response\Json;
use think\response\Redirect;
use think\response\View;
use Throwable;

class ConnectController extends BaseController
{
    public function index(): Redirect
    {
        return redirect('/');
    }

    public function callback(): Redirect
    {
        return redirect('/');
    }

    public function bind(Request $request): Json|View
    {
        try {
            if ($request->isAjax()) {
                return $this->success('data');
            }

            return view('bind');
        } catch (Throwable $e) {
            Log::error($e);

            if ($e instanceof CustomException || $e instanceof ValidateException) {
                return $this->error($e->getMessage());
            }

            return $this->error('请求错误，请稍后再试。');
        }
    }
}
