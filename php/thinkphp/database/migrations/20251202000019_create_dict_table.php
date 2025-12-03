<?php

use think\migration\db\Column;
use think\migration\Migrator;

class CreateDictTable extends Migrator
{
    public function change(): void
    {
        $this->table('dict')->setComment('字典表')
            ->addColumn(Column::integer('parent_id')->setNull(false)->setDefault(0)->setComment('父字典ID'))
            ->addColumn(Column::string('dict_type', 100)->setNull(false)->setDefault('')->setComment('字典类型'))
            ->addColumn(Column::string('dict_label')->setNull(false)->setDefault('')->setComment('字典标签'))
            ->addColumn(Column::string('dict_value')->setNull(false)->setDefault('')->setComment('字典值'))
            ->addColumn(Column::integer('sort')->setNull(false)->setDefault(0)->setComment('排序'))
            ->addColumn(Column::tinyInteger('status')->setNull(false)->setDefault(1)->setComment('状态: 1-正常;2-禁用'))
            ->addColumn(Column::string('remark')->setNull(false)->setDefault('')->setComment('备注'))
            ->addColumn(Column::dateTime('created_time')->setNull(false)->setDefault('CURRENT_TIMESTAMP')->setComment('创建时间'))
            ->addColumn(Column::dateTime('updated_time')->setNull(false)->setDefault('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP')->setComment('更新时间'))
            ->addIndex('parent_id')
            ->addIndex('dict_type')
            ->addIndex('status')
            ->addIndex('sort')
            ->save();
    }
}
