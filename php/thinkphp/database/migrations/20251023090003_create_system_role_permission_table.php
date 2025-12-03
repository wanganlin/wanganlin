<?php

use think\migration\db\Column;
use think\migration\Migrator;

class CreateSystemRolePermissionTable extends Migrator
{
    public function change(): void
    {
        $this->table('system_role_permission')->setComment('系统角色权限关系表')
            ->addColumn(Column::integer('system_role_id')->setNull(false)->setDefault(0)->setComment('角色ID'))
            ->addColumn(Column::integer('system_permission_id')->setNull(false)->setDefault(0)->setComment('资源ID'))
            ->addColumn(Column::dateTime('created_time')->setNull(false)->setDefault('CURRENT_TIMESTAMP')->setComment('创建时间'))
            ->addColumn(Column::dateTime('updated_time')->setNull(false)->setDefault('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP')->setComment('更新时间'))
            ->addIndex(['system_role_id', 'system_permission_id'], ['unique' => true])
            ->addIndex('created_time')
            ->save();
    }
}
