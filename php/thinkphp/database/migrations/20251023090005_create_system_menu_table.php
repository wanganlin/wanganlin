<?php

use think\migration\db\Column;
use think\migration\Migrator;

class CreateSystemMenuTable extends Migrator
{
    public function change(): void
    {
        $this->table('system_menu')->setComment('系统菜单表')
            ->addColumn(Column::integer('parent_id')->setNull(false)->setDefault(0)->setComment('上级菜单ID'))
            ->addColumn(Column::string('name')->setNull(false)->setDefault('')->setComment('名称'))
            ->addColumn(Column::string('icon')->setNull(false)->setDefault('')->setComment('ICON图标'))
            ->addColumn(Column::string('description')->setNull(false)->setDefault('')->setComment('描述'))
            ->addColumn(Column::integer('sort')->setNull(false)->setDefault(0)->setComment('排序'))
            ->addColumn(Column::tinyInteger('status')->setNull(false)->setDefault(0)->setComment('状态: 1-正常;2-禁用'))
            ->addColumn(Column::dateTime('created_time')->setNull(false)->setDefault('CURRENT_TIMESTAMP')->setComment('创建时间'))
            ->addColumn(Column::dateTime('updated_time')->setNull(false)->setDefault('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP')->setComment('更新时间'))
            ->addIndex('parent_id')
            ->addIndex('sort')
            ->addIndex('status')
            ->addIndex('created_time')
            ->save();
    }
}
