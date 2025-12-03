<?php

use think\migration\db\Column;
use think\migration\Migrator;

class CreateCommentTable extends Migrator
{
    public function change(): void
    {
        $this->table('comment')->setComment('评论表')
            ->addColumn(Column::integer('parent_id')->setNull(false)->setDefault(0)->setComment('父评论ID'))
            ->addColumn(Column::integer('user_id')->setNull(false)->setDefault(0)->setComment('用户ID'))
            ->addColumn(Column::string('commentable_type', 100)->setNull(false)->setDefault('')->setComment('评论对象类型'))
            ->addColumn(Column::integer('commentable_id')->setNull(false)->setDefault(0)->setComment('评论对象ID'))
            ->addColumn(Column::text('content')->setComment('评论内容'))
            ->addColumn(Column::string('ip', 50)->setNull(false)->setDefault('')->setComment('IP地址'))
            ->addColumn(Column::string('user_agent')->setNull(false)->setDefault('')->setComment('User Agent'))
            ->addColumn(Column::integer('like_count')->setNull(false)->setDefault(0)->setComment('点赞次数'))
            ->addColumn(Column::tinyInteger('status')->setNull(false)->setDefault(1)->setComment('状态: 1-待审核;2-已发布;3-已拒绝'))
            ->addColumn(Column::tinyInteger('is_top')->setNull(false)->setDefault(0)->setComment('是否置顶: 0-否;1-是'))
            ->addColumn(Column::tinyInteger('is_hot')->setNull(false)->setDefault(0)->setComment('是否热门: 0-否;1-是'))
            ->addColumn(Column::tinyInteger('deleted')->setNull(false)->setDefault(0)->setComment('删除状态: 0-未删除;1-已删除'))
            ->addColumn(Column::dateTime('created_time')->setNull(false)->setDefault('CURRENT_TIMESTAMP')->setComment('创建时间'))
            ->addColumn(Column::dateTime('updated_time')->setNull(false)->setDefault('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP')->setComment('更新时间'))
            ->addColumn(Column::dateTime('deleted_time')->setComment('删除时间'))
            ->addIndex('parent_id')
            ->addIndex('user_id')
            ->addIndex(['commentable_type', 'commentable_id'])
            ->addIndex('status')
            ->addIndex('is_top')
            ->addIndex('is_hot')
            ->addIndex('deleted')
            ->addIndex('created_time')
            ->save();
    }
}
