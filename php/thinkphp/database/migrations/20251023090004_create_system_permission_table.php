<?php

use think\migration\db\Column;
use think\migration\Migrator;

class CreateSystemPermissionTable extends Migrator
{
    public function change(): void
    {
        $this->table('system_permission')->setComment('系统权限表')
            ->addColumn(Column::string('code')->setNull(false)->setDefault('')->setComment('资源码'))
            ->addColumn(Column::string('name')->setNull(false)->setDefault('')->setComment('资源名称'))
            ->addColumn(Column::tinyInteger('status')->setNull(false)->setDefault(0)->setComment('状态: 1-正常;2-禁用'))
            ->addColumn(Column::dateTime('created_time')->setNull(false)->setDefault('CURRENT_TIMESTAMP')->setComment('创建时间'))
            ->addColumn(Column::dateTime('updated_time')->setNull(false)->setDefault('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP')->setComment('更新时间'))
            ->addIndex('code', ['unique' => true])
            ->addIndex('status')
            ->addIndex('created_time')
            ->save();
    }
}
