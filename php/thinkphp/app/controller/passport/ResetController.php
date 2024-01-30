<?php

declare(strict_types=1);

namespace app\controller\passport;

use app\controller\passport\request\ResetRequest;
use think\exception\ValidateException;
use think\Request;
use think\response\Json;
use think\response\View;

class ResetController extends BaseController
{
    public function index(Request $request): View
    {
        $token = $request->get('token');

        // todo check

        return view('index');
    }

    public function mobile(Request $request): Json
    {
        try {
            validate(ResetRequest::class)->check($request->post());
        } catch (ValidateException $e) {
            return $this->error($e->getError());
        }

        return $this->success('');
    }
}
