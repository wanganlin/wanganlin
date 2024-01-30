<?php

declare(strict_types=1);

namespace app\controller\passport;

use app\controller\passport\request\SignupRequest;
use think\exception\ValidateException;
use think\Request;
use think\response\Json;
use think\response\View;

class SignupController extends BaseController
{
    public function index(Request $request): View
    {
        return view('index');
    }

    public function mobile(Request $request): Json
    {
        try {
            validate(SignupRequest::class)->check($request->post());
        } catch (ValidateException $e) {
            return $this->error($e->getError());
        }

        return $this->success('data');
    }
}
