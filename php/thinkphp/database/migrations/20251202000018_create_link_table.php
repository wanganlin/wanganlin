<?php

use think\migration\db\Column;
use think\migration\Migrator;

class CreateLinkTable extends Migrator
{
    public function change(): void
    {
        $this->table('link')->setComment('友情链接表')
            ->addColumn(Column::integer('category_id')->setNull(false)->setDefault(0)->setComment('分类ID'))
            ->addColumn(Column::string('title')->setNull(false)->setDefault('')->setComment('标题'))
            ->addColumn(Column::string('url')->setNull(false)->setDefault('')->setComment('链接'))
            ->addColumn(Column::string('logo')->setNull(false)->setDefault('')->setComment('LOGO'))
            ->addColumn(Column::string('description')->setNull(false)->setDefault('')->setComment('描述'))
            ->addColumn(Column::tinyInteger('rating')->setNull(false)->setDefault(5)->setComment('星级: 1-5'))
            ->addColumn(Column::integer('sort')->setNull(false)->setDefault(0)->setComment('排序'))
            ->addColumn(Column::string('target', 20)->setNull(false)->setDefault('_blank')->setComment('打开方式: _blank-新窗口;_self-当前窗口'))
            ->addColumn(Column::tinyInteger('nofollow')->setNull(false)->setDefault(0)->setComment('是否nofollow: 0-否;1-是'))
            ->addColumn(Column::tinyInteger('status')->setNull(false)->setDefault(1)->setComment('状态: 1-正常;2-禁用'))
            ->addColumn(Column::dateTime('created_time')->setNull(false)->setDefault('CURRENT_TIMESTAMP')->setComment('创建时间'))
            ->addColumn(Column::dateTime('updated_time')->setNull(false)->setDefault('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP')->setComment('更新时间'))
            ->addIndex('category_id')
            ->addIndex('status')
            ->addIndex('sort')
            ->save();
    }
}
