<?php

declare(strict_types=1);

namespace app\controller\user;

use think\response\Json;

class IndexController extends BaseController
{
    /**
     * @return Json
     */
    public function index(): Json
    {
        return $this->success('data');
    }
}
