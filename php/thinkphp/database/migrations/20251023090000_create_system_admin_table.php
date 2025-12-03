<?php

use think\migration\db\Column;
use think\migration\Migrator;

class CreateSystemAdminTable extends Migrator
{
    public function change(): void
    {
        $this->table('system_admin')->setComment('系统管理员表')
            ->addColumn(Column::string('username')->setNull(false)->setDefault('')->setComment('用户名'))
            ->addColumn(Column::string('password')->setNull(false)->setDefault('')->setComment('登录密码'))
            ->addColumn(Column::string('name')->setNull(false)->setDefault('')->setComment('昵称'))
            ->addColumn(Column::string('avatar')->setNull(false)->setDefault('')->setComment('头像'))
            ->addColumn(Column::string('mobile')->setNull(false)->setDefault('')->setComment('手机号码'))
            ->addColumn(Column::string('email')->setNull(false)->setDefault('')->setComment('电子邮箱'))
            ->addColumn(Column::tinyInteger('status')->setNull(false)->setDefault(0)->setComment('状态: 1-正常;2-禁用'))
            ->addColumn(Column::tinyInteger('deleted')->setNull(false)->setDefault(0)->setComment('删除状态: 0-未删除;1-已删除'))
            ->addColumn(Column::dateTime('created_time')->setNull(false)->setDefault('CURRENT_TIMESTAMP')->setComment('创建时间'))
            ->addColumn(Column::dateTime('updated_time')->setNull(false)->setDefault('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP')->setComment('更新时间'))
            ->addColumn(Column::dateTime('deleted_time')->setComment('删除时间'))
            ->addIndex('username', ['unique' => true])
            ->addIndex('mobile')
            ->addIndex('email')
            ->addIndex('deleted')
            ->addIndex('created_time')
            ->save();
    }
}
