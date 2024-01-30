<?php

declare(strict_types=1);

namespace app\controller\passport;

use app\controller\passport\request\ForgetRequest;
use think\exception\ValidateException;
use think\Request;
use think\response\Json;
use think\response\View;

class ForgetController extends BaseController
{
    public function index(Request $request): View
    {
        return view('index');
    }

    public function mobile(Request $request): Json
    {
        try {
            validate(ForgetRequest::class)->check($request->post());
        } catch (ValidateException $e) {
            return $this->error($e->getError());
        }

        return $this->success('');
    }
}
