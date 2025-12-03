<?php

use think\migration\db\Column;
use think\migration\Migrator;

class CreateSystemRoleTable extends Migrator
{
    public function change(): void
    {
        $this->table('system_role')->setComment('系统角色表')
            ->addColumn(Column::string('code')->setNull(false)->setDefault('')->setComment('角色码'))
            ->addColumn(Column::string('name')->setNull(false)->setDefault('')->setComment('角色名称'))
            ->addColumn(Column::string('description')->setNull(false)->setDefault('')->setComment('角色描述'))
            ->addColumn(Column::tinyInteger('status')->setNull(false)->setDefault(0)->setComment('状态: 1-正常;2-禁用'))
            ->addColumn(Column::tinyInteger('deleted')->setNull(false)->setDefault(0)->setComment('删除状态: 0-未删除;1-已删除'))
            ->addColumn(Column::dateTime('created_time')->setNull(false)->setDefault('CURRENT_TIMESTAMP')->setComment('创建时间'))
            ->addColumn(Column::dateTime('updated_time')->setNull(false)->setDefault('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP')->setComment('更新时间'))
            ->addColumn(Column::dateTime('deleted_time')->setComment('删除时间'))
            ->addIndex('code', ['unique' => true])
            ->addIndex('status')
            ->addIndex('deleted')
            ->addIndex('created_time')
            ->save();
    }
}
