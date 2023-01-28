<?php

declare(strict_types=1);

namespace app\controller\console;

use think\response\Json;

class SystemController extends BaseController
{
    /**
     * 系统管理
     *
     * @getMapping(parent_id=5, menu=1)
     *
     * @return Json
     */
    public function index(): Json
    {
        return $this->success('');
    }

    /**
     * 关于我们
     *
     * @return Json
     */
    public function about(): Json
    {
        return $this->success('');
    }

    /**
     * 帮助手册
     *
     * @return Json
     */
    public function help(): Json
    {
        return $this->success('');
    }

    /**
     * 系统日志
     *
     * @return Json
     */
    public function log(): Json
    {
        return $this->success('');
    }
}
