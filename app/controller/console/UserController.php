<?php

declare(strict_types=1);

namespace app\controller\console;

use think\response\Json;

class UserController extends BaseController
{
    /**
     * 用户管理
     *
     * @getMapping(parent_id=4, menu=1)
     *
     * @return Json
     */
    public function query(): Json
    {
        return $this->success('query');
    }

    /**
     * 创建
     *
     * @return Json
     */
    public function store()
    {
        return $this->success('store');
    }

    /**
     * 显示
     *
     * @return Json
     */
    public function show()
    {
        return $this->success('show');
    }

    /**
     * 更新
     *
     * @return Json
     */
    public function update()
    {
        return $this->success('update');
    }

    /**
     * 删除
     *
     * @return Json
     */
    public function destroy()
    {
        return $this->success('destroy');
    }

    /**
     * 个人资料
     *
     * @return Json
     */
    public function profile(): Json
    {
        return $this->success('profile');
    }

    /**
     * 修改密码
     *
     * @return Json
     */
    public function password(): Json
    {
        return $this->success('password');
    }
}
