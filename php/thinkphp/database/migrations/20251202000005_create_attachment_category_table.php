<?php

use think\migration\db\Column;
use think\migration\Migrator;

class CreateAttachmentCategoryTable extends Migrator
{
    public function change(): void
    {
        $this->table('attachment_category')->setComment('附件分类表')
            ->addColumn(Column::integer('parent_id')->setNull(false)->setDefault(0)->setComment('上级分类ID'))
            ->addColumn(Column::string('name')->setNull(false)->setDefault('')->setComment('分类名称'))
            ->addColumn(Column::string('type', 50)->setNull(false)->setDefault('image')->setComment('分类类型: image-图片;video-视频;audio-音频;document-文档'))
            ->addColumn(Column::integer('sort')->setNull(false)->setDefault(0)->setComment('排序'))
            ->addColumn(Column::dateTime('created_time')->setNull(false)->setDefault('CURRENT_TIMESTAMP')->setComment('创建时间'))
            ->addColumn(Column::dateTime('updated_time')->setNull(false)->setDefault('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP')->setComment('更新时间'))
            ->addIndex('parent_id')
            ->addIndex('type')
            ->addIndex('sort')
            ->save();
    }
}
