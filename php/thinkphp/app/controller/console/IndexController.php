<?php

declare(strict_types=1);

namespace app\controller\console;

use think\response\Json;
use think\response\View;

class IndexController extends BaseController
{
    public function index(): View
    {
        return view('index');
    }

    public function dashboard(): Json
    {
        return $this->success('');
    }

    public function logout(): Json
    {
        session('auth_console', null);

        return $this->success('logout');
    }
}
