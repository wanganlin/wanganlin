<?php

declare(strict_types=1);

namespace app\controller\passport;

use think\Request;
use think\response\Json;
use think\response\Redirect;
use think\response\View;

class ConnectController extends BaseController
{
    public function index(Request $request): Redirect
    {
        return redirect('/');
    }

    public function callback(Request $request): Redirect
    {
        return redirect('/');
    }

    public function bind(Request $request): Json|View
    {
        if ($request->isAjax()) {
            return $this->success('data');
        }

        return view('bind');
    }
}
