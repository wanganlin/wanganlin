<?php

use think\migration\db\Column;
use think\migration\Migrator;

class CreateArticleTable extends Migrator
{
    public function change(): void
    {
        $this->table('article')->setComment('文章表')
            ->addColumn(Column::integer('category_id')->setNull(false)->setDefault(0)->setComment('分类ID'))
            ->addColumn(Column::integer('user_id')->setNull(false)->setDefault(0)->setComment('作者ID'))
            ->addColumn(Column::string('title')->setNull(false)->setDefault('')->setComment('文章标题'))
            ->addColumn(Column::string('slug')->setNull(false)->setDefault('')->setComment('文章别名'))
            ->addColumn(Column::string('summary', 500)->setNull(false)->setDefault('')->setComment('文章摘要'))
            ->addColumn(Column::text('content')->setComment('文章内容'))
            ->addColumn(Column::string('cover_image')->setNull(false)->setDefault('')->setComment('封面图'))
            ->addColumn(Column::text('images')->setComment('图片集(JSON)'))
            ->addColumn(Column::integer('view_count')->setNull(false)->setDefault(0)->setComment('浏览次数'))
            ->addColumn(Column::integer('like_count')->setNull(false)->setDefault(0)->setComment('点赞次数'))
            ->addColumn(Column::integer('comment_count')->setNull(false)->setDefault(0)->setComment('评论次数'))
            ->addColumn(Column::tinyInteger('is_recommend')->setNull(false)->setDefault(0)->setComment('是否推荐: 0-否;1-是'))
            ->addColumn(Column::tinyInteger('is_top')->setNull(false)->setDefault(0)->setComment('是否置顶: 0-否;1-是'))
            ->addColumn(Column::tinyInteger('is_hot')->setNull(false)->setDefault(0)->setComment('是否热门: 0-否;1-是'))
            ->addColumn(Column::tinyInteger('publish_status')->setNull(false)->setDefault(1)->setComment('发布状态: 1-草稿;2-已发布;3-下架'))
            ->addColumn(Column::dateTime('publish_time')->setComment('发布时间'))
            ->addColumn(Column::string('seo_title')->setNull(false)->setDefault('')->setComment('SEO标题'))
            ->addColumn(Column::string('seo_keywords')->setNull(false)->setDefault('')->setComment('SEO关键词'))
            ->addColumn(Column::string('seo_description')->setNull(false)->setDefault('')->setComment('SEO描述'))
            ->addColumn(Column::integer('sort')->setNull(false)->setDefault(0)->setComment('排序'))
            ->addColumn(Column::string('template', 100)->setNull(false)->setDefault('')->setComment('模板'))
            ->addColumn(Column::tinyInteger('deleted')->setNull(false)->setDefault(0)->setComment('删除状态: 0-未删除;1-已删除'))
            ->addColumn(Column::dateTime('created_time')->setNull(false)->setDefault('CURRENT_TIMESTAMP')->setComment('创建时间'))
            ->addColumn(Column::dateTime('updated_time')->setNull(false)->setDefault('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP')->setComment('更新时间'))
            ->addColumn(Column::dateTime('deleted_time')->setComment('删除时间'))
            ->addIndex('category_id')
            ->addIndex('user_id')
            ->addIndex('slug')
            ->addIndex('publish_status')
            ->addIndex('publish_time')
            ->addIndex('is_recommend')
            ->addIndex('is_top')
            ->addIndex('is_hot')
            ->addIndex('sort')
            ->addIndex('deleted')
            ->addIndex('created_time')
            ->save();
    }
}
