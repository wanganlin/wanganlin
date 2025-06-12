<?php

declare(strict_types=1);

namespace app\api\auth\controller;

use app\constant\GlobalConst;
use app\exception\CustomException;
use think\exception\ValidateException;
use think\facade\Log;
use think\Request;
use think\response\Json;
use Throwable;

class LogoutController extends BaseController
{
    public function index(Request $request): Json
    {
        try {
            if ($request->isAjax() && session('?'.GlobalConst::ConsoleToken)) {
                session(GlobalConst::AuthName, null);

                return $this->success();
            }

            throw new CustomException('退出登录失败');
        } catch (Throwable $e) {
            Log::error($e);

            if ($e instanceof CustomException || $e instanceof ValidateException) {
                return $this->error($e->getMessage());
            }

            return $this->error('请求错误，请稍后再试。');
        }
    }
}
