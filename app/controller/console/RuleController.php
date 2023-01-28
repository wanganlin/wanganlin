<?php

declare(strict_types=1);

namespace app\controller\console;

use think\response\Json;

class RuleController extends BaseController
{
    /**
     * 权限管理
     *
     * @getMapping(parent_id=4, menu=1)
     *
     * @return Json
     */
    public function query(): Json
    {
        $rules = AuthRule::get();

        return $this->success(['rules' => $rules->toArray()]);
    }

    /**
     * 保存
     *
     * @postMapping
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
