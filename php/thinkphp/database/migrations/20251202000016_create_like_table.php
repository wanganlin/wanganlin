<?php

use think\migration\db\Column;
use think\migration\Migrator;

class CreateLikeTable extends Migrator
{
    public function change(): void
    {
        $this->table('like')->setComment('点赞表')
            ->addColumn(Column::integer('user_id')->setNull(false)->setDefault(0)->setComment('用户ID'))
            ->addColumn(Column::string('likeable_type', 100)->setNull(false)->setDefault('')->setComment('点赞对象类型'))
            ->addColumn(Column::integer('likeable_id')->setNull(false)->setDefault(0)->setComment('点赞对象ID'))
            ->addColumn(Column::dateTime('created_time')->setNull(false)->setDefault('CURRENT_TIMESTAMP')->setComment('创建时间'))
            ->addIndex(['user_id', 'likeable_type', 'likeable_id'], ['unique' => true])
            ->addIndex(['likeable_type', 'likeable_id'])
            ->addIndex('created_time')
            ->save();
    }
}
