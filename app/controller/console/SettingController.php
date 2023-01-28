<?php

declare(strict_types=1);

namespace app\controller\console;

use think\response\Json;

class SettingController extends BaseController
{
    /**
     * 基本参数
     *
     * @requestMapping(parent_id=1, menu=1)
     *
     * @return Json
     */
    public function basic(): Json
    {
        return $this->success('');
    }

    /**
     * 公司信息
     *
     * @requestMapping(parent_id=1, menu=1)
     *
     * @return Json
     */
    public function company(): Json
    {
        return $this->success('');
    }

    /**
     * 网站信息
     *
     * @requestMapping(parent_id=1, menu=1)
     *
     * @return Json
     */
    public function site(): Json
    {
        return $this->success('');
    }

    /**
     * 邮件设置
     *
     * @requestMapping(parent_id=1, menu=1)
     *
     * @return Json
     */
    public function email(): Json
    {
        return $this->success('');
    }
}
