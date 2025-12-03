<?php

use think\migration\db\Column;
use think\migration\Migrator;

class CreateSettingTable extends Migrator
{
    public function change(): void
    {
        $this->table('setting')->setComment('系统配置表')
            ->addColumn(Column::string('group', 50)->setNull(false)->setDefault('basic')->setComment('配置分组: basic-基础;seo-SEO;upload-上传;email-邮件;sms-短信'))
            ->addColumn(Column::string('key', 100)->setNull(false)->setDefault('')->setComment('配置键'))
            ->addColumn(Column::text('value')->setComment('配置值'))
            ->addColumn(Column::string('type', 50)->setNull(false)->setDefault('text')->setComment('类型: text-文本;textarea-多行文本;radio-单选;checkbox-多选;image-图片;file-文件'))
            ->addColumn(Column::string('title')->setNull(false)->setDefault('')->setComment('配置标题'))
            ->addColumn(Column::string('description')->setNull(false)->setDefault('')->setComment('配置描述'))
            ->addColumn(Column::integer('sort')->setNull(false)->setDefault(0)->setComment('排序'))
            ->addColumn(Column::dateTime('created_time')->setNull(false)->setDefault('CURRENT_TIMESTAMP')->setComment('创建时间'))
            ->addColumn(Column::dateTime('updated_time')->setNull(false)->setDefault('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP')->setComment('更新时间'))
            ->addIndex(['group', 'key'], ['unique' => true])
            ->addIndex('group')
            ->addIndex('sort')
            ->save();
    }
}
