<?php

use think\migration\db\Column;
use think\migration\Migrator;

class CreateBannerTable extends Migrator
{
    public function change(): void
    {
        $this->table('banner')->setComment('广告/轮播表')
            ->addColumn(Column::integer('position_id')->setNull(false)->setDefault(0)->setComment('广告位ID'))
            ->addColumn(Column::string('title')->setNull(false)->setDefault('')->setComment('标题'))
            ->addColumn(Column::string('image')->setNull(false)->setDefault('')->setComment('图片'))
            ->addColumn(Column::string('link')->setNull(false)->setDefault('')->setComment('链接'))
            ->addColumn(Column::string('target', 20)->setNull(false)->setDefault('_blank')->setComment('打开方式: _blank-新窗口;_self-当前窗口'))
            ->addColumn(Column::dateTime('start_time')->setComment('开始时间'))
            ->addColumn(Column::dateTime('end_time')->setComment('结束时间'))
            ->addColumn(Column::integer('sort')->setNull(false)->setDefault(0)->setComment('排序'))
            ->addColumn(Column::integer('click_count')->setNull(false)->setDefault(0)->setComment('点击次数'))
            ->addColumn(Column::tinyInteger('status')->setNull(false)->setDefault(1)->setComment('状态: 1-正常;2-禁用'))
            ->addColumn(Column::dateTime('created_time')->setNull(false)->setDefault('CURRENT_TIMESTAMP')->setComment('创建时间'))
            ->addColumn(Column::dateTime('updated_time')->setNull(false)->setDefault('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP')->setComment('更新时间'))
            ->addIndex('position_id')
            ->addIndex('status')
            ->addIndex('sort')
            ->addIndex('start_time')
            ->addIndex('end_time')
            ->addIndex('created_time')
            ->save();
    }
}
