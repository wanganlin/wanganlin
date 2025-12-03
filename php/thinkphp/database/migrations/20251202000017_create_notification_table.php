<?php

use think\migration\db\Column;
use think\migration\Migrator;

class CreateNotificationTable extends Migrator
{
    public function change(): void
    {
        $this->table('notification')->setComment('通知表')
            ->addColumn(Column::integer('user_id')->setNull(false)->setDefault(0)->setComment('用户ID'))
            ->addColumn(Column::string('type', 50)->setNull(false)->setDefault('system')->setComment('通知类型: system-系统;message-私信;comment-评论;like-点赞'))
            ->addColumn(Column::string('title')->setNull(false)->setDefault('')->setComment('标题'))
            ->addColumn(Column::text('content')->setComment('内容'))
            ->addColumn(Column::string('link')->setNull(false)->setDefault('')->setComment('跳转链接'))
            ->addColumn(Column::tinyInteger('is_read')->setNull(false)->setDefault(0)->setComment('是否已读: 0-未读;1-已读'))
            ->addColumn(Column::dateTime('read_time')->setComment('阅读时间'))
            ->addColumn(Column::dateTime('created_time')->setNull(false)->setDefault('CURRENT_TIMESTAMP')->setComment('创建时间'))
            ->addIndex('user_id')
            ->addIndex('type')
            ->addIndex('is_read')
            ->addIndex('created_time')
            ->save();
    }
}
