<?php

use think\migration\db\Column;
use think\migration\Migrator;

class CreateLoginLogTable extends Migrator
{
    public function change(): void
    {
        $this->table('login_log')->setComment('登录日志表')
            ->addColumn(Column::integer('user_id')->setNull(false)->setDefault(0)->setComment('用户ID'))
            ->addColumn(Column::string('username', 100)->setNull(false)->setDefault('')->setComment('用户名'))
            ->addColumn(Column::string('user_type', 50)->setNull(false)->setDefault('user')->setComment('用户类型: admin-管理员;user-用户'))
            ->addColumn(Column::string('ip', 50)->setNull(false)->setDefault('')->setComment('IP地址'))
            ->addColumn(Column::string('location')->setNull(false)->setDefault('')->setComment('登录地点'))
            ->addColumn(Column::string('browser')->setNull(false)->setDefault('')->setComment('浏览器'))
            ->addColumn(Column::string('os')->setNull(false)->setDefault('')->setComment('操作系统'))
            ->addColumn(Column::tinyInteger('login_status')->setNull(false)->setDefault(1)->setComment('登录状态: 1-成功;2-失败'))
            ->addColumn(Column::string('message')->setNull(false)->setDefault('')->setComment('提示信息'))
            ->addColumn(Column::dateTime('created_time')->setNull(false)->setDefault('CURRENT_TIMESTAMP')->setComment('创建时间'))
            ->addIndex('user_id')
            ->addIndex('user_type')
            ->addIndex('ip')
            ->addIndex('login_status')
            ->addIndex('created_time')
            ->save();
    }
}
