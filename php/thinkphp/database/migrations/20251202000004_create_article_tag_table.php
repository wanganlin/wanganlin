<?php

use think\migration\db\Column;
use think\migration\Migrator;

class CreateArticleTagTable extends Migrator
{
    public function change(): void
    {
        $this->table('article_tag')->setComment('文章标签关联表')
            ->addColumn(Column::integer('article_id')->setNull(false)->setDefault(0)->setComment('文章ID'))
            ->addColumn(Column::integer('tag_id')->setNull(false)->setDefault(0)->setComment('标签ID'))
            ->addColumn(Column::dateTime('created_time')->setNull(false)->setDefault('CURRENT_TIMESTAMP')->setComment('创建时间'))
            ->addIndex(['article_id', 'tag_id'], ['unique' => true])
            ->addIndex('tag_id')
            ->addIndex('created_time')
            ->save();
    }
}
