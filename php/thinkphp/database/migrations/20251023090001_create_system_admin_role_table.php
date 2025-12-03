<?php

use think\migration\db\Column;
use think\migration\Migrator;

class CreateSystemAdminRoleTable extends Migrator
{
    public function change(): void
    {
        $this->table('system_admin_role')->setComment('系统管理员角色关系表')
            ->addColumn(Column::integer('system_admin_id')->setNull(false)->setDefault(0)->setComment('管理员ID'))
            ->addColumn(Column::integer('system_role_id')->setNull(false)->setDefault(0)->setComment('角色ID'))
            ->addColumn(Column::dateTime('created_time')->setNull(false)->setDefault('CURRENT_TIMESTAMP')->setComment('创建时间'))
            ->addColumn(Column::dateTime('updated_time')->setNull(false)->setDefault('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP')->setComment('更新时间'))
            ->addIndex(['system_admin_id', 'system_role_id'], ['unique' => true])
            ->addIndex('created_time')
            ->save();
    }
}
