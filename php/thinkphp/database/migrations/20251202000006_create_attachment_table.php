<?php

use think\migration\db\Column;
use think\migration\Migrator;

class CreateAttachmentTable extends Migrator
{
    public function change(): void
    {
        $this->table('attachment')->setComment('附件表')
            ->addColumn(Column::integer('user_id')->setNull(false)->setDefault(0)->setComment('上传用户ID'))
            ->addColumn(Column::integer('category_id')->setNull(false)->setDefault(0)->setComment('分类ID'))
            ->addColumn(Column::string('name')->setNull(false)->setDefault('')->setComment('文件名'))
            ->addColumn(Column::string('original_name')->setNull(false)->setDefault('')->setComment('原始文件名'))
            ->addColumn(Column::string('path')->setNull(false)->setDefault('')->setComment('文件路径'))
            ->addColumn(Column::string('url')->setNull(false)->setDefault('')->setComment('访问URL'))
            ->addColumn(Column::string('storage_type', 50)->setNull(false)->setDefault('local')->setComment('存储类型: local-本地;oss-阿里云;qiniu-七牛云;cos-腾讯云'))
            ->addColumn(Column::string('file_type', 50)->setNull(false)->setDefault('')->setComment('文件类型: image-图片;video-视频;audio-音频;document-文档'))
            ->addColumn(Column::string('mime_type', 100)->setNull(false)->setDefault('')->setComment('MIME类型'))
            ->addColumn(Column::bigInteger('size')->setNull(false)->setDefault(0)->setComment('文件大小(字节)'))
            ->addColumn(Column::string('ext', 20)->setNull(false)->setDefault('')->setComment('文件扩展名'))
            ->addColumn(Column::integer('width')->setNull(false)->setDefault(0)->setComment('宽度(图片/视频)'))
            ->addColumn(Column::integer('height')->setNull(false)->setDefault(0)->setComment('高度(图片/视频)'))
            ->addColumn(Column::integer('duration')->setNull(false)->setDefault(0)->setComment('时长(音视频,秒)'))
            ->addColumn(Column::string('md5', 32)->setNull(false)->setDefault('')->setComment('MD5值'))
            ->addColumn(Column::string('sha1', 40)->setNull(false)->setDefault('')->setComment('SHA1值'))
            ->addColumn(Column::integer('download_count')->setNull(false)->setDefault(0)->setComment('下载次数'))
            ->addColumn(Column::tinyInteger('status')->setNull(false)->setDefault(1)->setComment('状态: 1-正常;2-禁用'))
            ->addColumn(Column::tinyInteger('deleted')->setNull(false)->setDefault(0)->setComment('删除状态: 0-未删除;1-已删除'))
            ->addColumn(Column::dateTime('created_time')->setNull(false)->setDefault('CURRENT_TIMESTAMP')->setComment('创建时间'))
            ->addColumn(Column::dateTime('updated_time')->setNull(false)->setDefault('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP')->setComment('更新时间'))
            ->addColumn(Column::dateTime('deleted_time')->setComment('删除时间'))
            ->addIndex('user_id')
            ->addIndex('category_id')
            ->addIndex('storage_type')
            ->addIndex('file_type')
            ->addIndex('md5')
            ->addIndex('sha1')
            ->addIndex('status')
            ->addIndex('deleted')
            ->addIndex('created_time')
            ->save();
    }
}
