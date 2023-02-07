<?php

declare(strict_types=1);

namespace app\controller\console;

use think\response\Json;

class IndexController extends BaseController
{
    /**
     * @return Json
     */
    public function index(): Json
    {
        return $this->success('');
    }

    /**
     * 起始页
     *
     * @return Json
     */
    public function dashboard(): Json
    {
        return $this->success('');
    }

    /**
     * @return Json
     */
    public function logout(): Json
    {
        session('auth_console', null);

        return $this->succeed('logout');
    }
}
