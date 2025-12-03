<?php

use think\migration\db\Column;
use think\migration\Migrator;

class CreateFavoriteTable extends Migrator
{
    public function change(): void
    {
        $this->table('favorite')->setComment('收藏表')
            ->addColumn(Column::integer('user_id')->setNull(false)->setDefault(0)->setComment('用户ID'))
            ->addColumn(Column::string('favorable_type', 100)->setNull(false)->setDefault('')->setComment('收藏对象类型'))
            ->addColumn(Column::integer('favorable_id')->setNull(false)->setDefault(0)->setComment('收藏对象ID'))
            ->addColumn(Column::dateTime('created_time')->setNull(false)->setDefault('CURRENT_TIMESTAMP')->setComment('创建时间'))
            ->addIndex(['user_id', 'favorable_type', 'favorable_id'], ['unique' => true])
            ->addIndex(['favorable_type', 'favorable_id'])
            ->addIndex('created_time')
            ->save();
    }
}
