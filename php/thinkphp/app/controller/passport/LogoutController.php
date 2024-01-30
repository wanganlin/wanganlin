<?php

declare(strict_types=1);

namespace app\controller\passport;

use app\controller\home\BaseController;
use app\foundation\exception\CustomException;
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
            if ($request->isAjax()) {

                return $this->success('data');
            }

            throw new CustomException('请求方法异常');
        } catch (Throwable $e) {
            Log::error($e);

            if ($e instanceof CustomException || $e instanceof ValidateException) {
                return $this->error($e->getMessage());
            }

            return $this->error('请求错误，请稍后再试。');
        }
    }
}
