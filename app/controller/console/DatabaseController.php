<?php

declare(strict_types=1);

namespace app\controller\console;

use think\response\Json;

class DatabaseController extends BaseController
{
    /**
     * 数据库管理
     *
     * @getMapping(parent_id=5, menu=1)
     *
     * @return Json
     */
    public function query(): Json
    {
        return $this->success('');
    }

    /**
     * 保存
     *
     * @postMapping
     */
    public function backup()
    {
        return $this->success('');
    }

    /**
     * 更新
     *
     * @postMapping
     */
    public function rollback()
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
