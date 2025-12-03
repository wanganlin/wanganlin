<?php

use think\migration\db\Column;
use think\migration\Migrator;

class CreateBannerPositionTable extends Migrator
{
    public function change(): void
    {
        $this->table('banner_position')->setComment('广告位表')
            ->addColumn(Column::string('name')->setNull(false)->setDefault('')->setComment('广告位名称'))
            ->addColumn(Column::string('code', 50)->setNull(false)->setDefault('')->setComment('调用标识'))
            ->addColumn(Column::string('description')->setNull(false)->setDefault('')->setComment('描述'))
            ->addColumn(Column::integer('width')->setNull(false)->setDefault(0)->setComment('推荐宽度'))
            ->addColumn(Column::integer('height')->setNull(false)->setDefault(0)->setComment('推荐高度'))
            ->addColumn(Column::dateTime('created_time')->setNull(false)->setDefault('CURRENT_TIMESTAMP')->setComment('创建时间'))
            ->addColumn(Column::dateTime('updated_time')->setNull(false)->setDefault('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP')->setComment('更新时间'))
            ->addIndex('code', ['unique' => true])
            ->save();
    }
}
