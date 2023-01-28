<?php

declare(strict_types=1);

namespace app\controller\console;

use think\response\Json;

class AdPositionController extends BaseController
{
    /**
     * 广告位管理
     *
     * @getMapping(parent_id=3, menu=1)
     *
     * @return Json
     */
    public function query(): Json
    {
        return $this->success('ad');
    }

    /**
     * 创建广告位
     *
     * @return Json
     */
    public function store(): Json
    {
        return $this->success('ad');
    }

    /**
     * 显示广告位
     *
     * @return Json
     */
    public function show(): Json
    {
        return $this->success('ad');
    }

    /**
     * 更新广告位
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
     * 删除广告位
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
