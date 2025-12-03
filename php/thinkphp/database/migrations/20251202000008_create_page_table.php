<?php

use think\migration\db\Column;
use think\migration\Migrator;

class CreatePageTable extends Migrator
{
    public function change(): void
    {
        $this->table('page')->setComment('单页表')
            ->addColumn(Column::string('title')->setNull(false)->setDefault('')->setComment('页面标题'))
            ->addColumn(Column::string('slug')->setNull(false)->setDefault('')->setComment('页面别名'))
            ->addColumn(Column::text('content')->setComment('页面内容'))
            ->addColumn(Column::string('template', 100)->setNull(false)->setDefault('')->setComment('模板'))
            ->addColumn(Column::string('keywords')->setNull(false)->setDefault('')->setComment('关键词'))
            ->addColumn(Column::string('description')->setNull(false)->setDefault('')->setComment('描述'))
            ->addColumn(Column::integer('view_count')->setNull(false)->setDefault(0)->setComment('浏览次数'))
            ->addColumn(Column::tinyInteger('status')->setNull(false)->setDefault(1)->setComment('状态: 1-正常;2-禁用'))
            ->addColumn(Column::integer('sort')->setNull(false)->setDefault(0)->setComment('排序'))
            ->addColumn(Column::dateTime('created_time')->setNull(false)->setDefault('CURRENT_TIMESTAMP')->setComment('创建时间'))
            ->addColumn(Column::dateTime('updated_time')->setNull(false)->setDefault('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP')->setComment('更新时间'))
            ->addIndex('slug', ['unique' => true])
            ->addIndex('status')
            ->addIndex('sort')
            ->addIndex('created_time')
            ->save();
    }
}
