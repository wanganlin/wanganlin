<?php

declare(strict_types=1);

namespace app\controller\console;

use think\response\Json;

class AdController extends BaseController
{
    /**
     * 广告列表
     *
     * @return Json
     */
    public function query(): Json
    {
        return $this->success('ad');
    }

    /**
     * 创建广告
     *
     * @return Json
     */
    public function store(): Json
    {
        return $this->success('ad');
    }

    /**
     * 显示广告
     *
     * @return Json
     */
    public function show(): Json
    {
        return $this->success('ad');
    }

    /**
     * 更新广告
     *
     * @postMapping
     *
     * @return Json
     */
    public function update(): Json
    {
        return $this->success('ad');
    }

    /**
     * 删除广告
     *
     * @postMapping
     *
     * @return Json
     */
    public function destroy(): Json
    {
        return $this->success('ad');
    }
}
