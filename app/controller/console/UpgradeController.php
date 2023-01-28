<?php

declare(strict_types=1);

namespace app\controller\console;

use think\response\Json;

class UpgradeController extends BaseController
{
    /**
     * 在线更新
     *
     * @getMapping(parent_id=5, menu=1)
     *
     * @return Json
     */
    public function index(): Json
    {
        return $this->success('');
    }
}
