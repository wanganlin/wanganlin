<?php

use think\migration\db\Column;
use think\migration\Migrator;

class CreateTagTable extends Migrator
{
    public function change(): void
    {
        $this->table('tag')->setComment('标签表')
            ->addColumn(Column::string('name')->setNull(false)->setDefault('')->setComment('标签名称'))
            ->addColumn(Column::string('slug')->setNull(false)->setDefault('')->setComment('标签别名'))
            ->addColumn(Column::string('description')->setNull(false)->setDefault('')->setComment('标签描述'))
            ->addColumn(Column::integer('use_count')->setNull(false)->setDefault(0)->setComment('使用次数'))
            ->addColumn(Column::string('color', 20)->setNull(false)->setDefault('')->setComment('标签颜色'))
            ->addColumn(Column::tinyInteger('status')->setNull(false)->setDefault(1)->setComment('状态: 1-正常;2-禁用'))
            ->addColumn(Column::dateTime('created_time')->setNull(false)->setDefault('CURRENT_TIMESTAMP')->setComment('创建时间'))
            ->addColumn(Column::dateTime('updated_time')->setNull(false)->setDefault('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP')->setComment('更新时间'))
            ->addIndex('name')
            ->addIndex('slug', ['unique' => true])
            ->addIndex('status')
            ->addIndex('use_count')
            ->addIndex('created_time')
            ->save();
    }
}
