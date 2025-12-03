<?php

use think\migration\db\Column;
use think\migration\Migrator;

class CreateCategoryTable extends Migrator
{
    public function change(): void
    {
        $this->table('category')->setComment('内容分类表')
            ->addColumn(Column::integer('parent_id')->setNull(false)->setDefault(0)->setComment('上级分类ID'))
            ->addColumn(Column::string('name')->setNull(false)->setDefault('')->setComment('分类名称'))
            ->addColumn(Column::string('slug')->setNull(false)->setDefault('')->setComment('分类别名'))
            ->addColumn(Column::text('description')->setComment('分类描述'))
            ->addColumn(Column::string('type', 50)->setNull(false)->setDefault('article')->setComment('分类类型: article-文章;product-产品;custom-自定义'))
            ->addColumn(Column::integer('sort')->setNull(false)->setDefault(0)->setComment('排序'))
            ->addColumn(Column::string('icon')->setNull(false)->setDefault('')->setComment('图标'))
            ->addColumn(Column::string('path')->setNull(false)->setDefault('')->setComment('分类路径'))
            ->addColumn(Column::tinyInteger('status')->setNull(false)->setDefault(1)->setComment('状态: 1-正常;2-禁用'))
            ->addColumn(Column::string('seo_title')->setNull(false)->setDefault('')->setComment('SEO标题'))
            ->addColumn(Column::string('seo_keywords')->setNull(false)->setDefault('')->setComment('SEO关键词'))
            ->addColumn(Column::string('seo_description')->setNull(false)->setDefault('')->setComment('SEO描述'))
            ->addColumn(Column::tinyInteger('deleted')->setNull(false)->setDefault(0)->setComment('删除状态: 0-未删除;1-已删除'))
            ->addColumn(Column::dateTime('created_time')->setNull(false)->setDefault('CURRENT_TIMESTAMP')->setComment('创建时间'))
            ->addColumn(Column::dateTime('updated_time')->setNull(false)->setDefault('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP')->setComment('更新时间'))
            ->addColumn(Column::dateTime('deleted_time')->setComment('删除时间'))
            ->addIndex('parent_id')
            ->addIndex('type')
            ->addIndex('slug')
            ->addIndex('sort')
            ->addIndex('status')
            ->addIndex('deleted')
            ->addIndex('created_time')
            ->save();
    }
}
