<?php

declare(strict_types=1);

namespace app\controller\console;

use think\response\Json;

class CategoryController extends BaseController
{
    /**
     * 栏目管理
     *
     * @getMapping(parent_id=2, menu=1)
     *
     * @return Json
     */
    public function query(): Json
    {
        return $this->success('');
    }

    /**
     * 创建
     *
     * @return Json
     */
    public function store()
    {
        return $this->success('');
    }

    /**
     * 显示
     */
    public function show()
    {
        return $this->success('');
    }

    /**
     * 更新
     *
     * @postMapping
     */
    public function update()
    {
        return $this->success('');
    }

    /**
     * 删除
     *
     * @postMapping
     */
    public function destroy()
    {
        return $this->success('');
    }
}
