<?php

use think\migration\db\Column;
use think\migration\Migrator;

class CreateNavigationTable extends Migrator
{
    public function change(): void
    {
        $this->table('navigation')->setComment('导航表')
            ->addColumn(Column::integer('parent_id')->setNull(false)->setDefault(0)->setComment('上级导航ID'))
            ->addColumn(Column::string('position', 50)->setNull(false)->setDefault('header')->setComment('导航位置: header-顶部;footer-底部;side-侧边'))
            ->addColumn(Column::string('title')->setNull(false)->setDefault('')->setComment('标题'))
            ->addColumn(Column::string('url')->setNull(false)->setDefault('')->setComment('链接'))
            ->addColumn(Column::string('icon')->setNull(false)->setDefault('')->setComment('图标'))
            ->addColumn(Column::string('target', 20)->setNull(false)->setDefault('_self')->setComment('打开方式: _blank-新窗口;_self-当前窗口'))
            ->addColumn(Column::integer('sort')->setNull(false)->setDefault(0)->setComment('排序'))
            ->addColumn(Column::tinyInteger('status')->setNull(false)->setDefault(1)->setComment('状态: 1-正常;2-禁用'))
            ->addColumn(Column::dateTime('created_time')->setNull(false)->setDefault('CURRENT_TIMESTAMP')->setComment('创建时间'))
            ->addColumn(Column::dateTime('updated_time')->setNull(false)->setDefault('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP')->setComment('更新时间'))
            ->addIndex('parent_id')
            ->addIndex('position')
            ->addIndex('status')
            ->addIndex('sort')
            ->save();
    }
}
