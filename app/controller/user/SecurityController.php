<?php

declare(strict_types=1);

namespace app\controller\user;

use think\Request;
use think\response\Json;

class SecurityController extends BaseController
{
    /**
     * @param Request $request
     * @return Json
     */
    public function show(Request $request): Json
    {
        return $this->success('data');
    }

    /**
     * @param Request $request
     * @return Json
     */
    public function update(Request $request): Json
    {
        return $this->success('data');
    }
}
