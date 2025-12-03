<?php

declare(strict_types=1);

namespace app\bundles\category\entity;

use Juling\Foundation\Support\ArrayHelper;

class CategoryEntity
{
    use ArrayHelper;

    const string getId = 'id'; // ID

    const string getParentId = 'parent_id'; // 上级分类ID

    const string getName = 'name'; // 分类名称

    const string getSlug = 'slug'; // 分类别名

    const string getDescription = 'description'; // 分类描述

    const string getType = 'type'; // 分类类型: article-文章;product-产品;custom-自定义

    const string getSort = 'sort'; // 排序

    const string getIcon = 'icon'; // 图标

    const string getPath = 'path'; // 分类路径

    const string getStatus = 'status'; // 状态: 1-正常;2-禁用

    const string getSeoTitle = 'seo_title'; // SEO标题

    const string getSeoKeywords = 'seo_keywords'; // SEO关键词

    const string getSeoDescription = 'seo_description'; // SEO描述

    const string getDeleted = 'deleted'; // 删除状态: 0-未删除;1-已删除

    const string getCreatedTime = 'created_time'; // 创建时间

    const string getUpdatedTime = 'updated_time'; // 更新时间

    const string getDeletedTime = 'deleted_time'; // 删除时间

    private int $id;

    private int $parentId;

    private string $name;

    private string $slug;

    private string $description;

    private string $type;

    private int $sort;

    private string $icon;

    private string $path;

    private int $status;

    private string $seoTitle;

    private string $seoKeywords;

    private string $seoDescription;

    private int $deleted;

    private string $createdTime;

    private string $updatedTime;

    private string $deletedTime;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getParentId(): int
    {
        return $this->parentId;
    }

    public function setParentId(int $parentId): void
    {
        $this->parentId = $parentId;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getSlug(): string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): void
    {
        $this->slug = $slug;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function getSort(): int
    {
        return $this->sort;
    }

    public function setSort(int $sort): void
    {
        $this->sort = $sort;
    }

    public function getIcon(): string
    {
        return $this->icon;
    }

    public function setIcon(string $icon): void
    {
        $this->icon = $icon;
    }

    public function getPath(): string
    {
        return $this->path;
    }

    public function setPath(string $path): void
    {
        $this->path = $path;
    }

    public function getStatus(): int
    {
        return $this->status;
    }

    public function setStatus(int $status): void
    {
        $this->status = $status;
    }

    public function getSeoTitle(): string
    {
        return $this->seoTitle;
    }

    public function setSeoTitle(string $seoTitle): void
    {
        $this->seoTitle = $seoTitle;
    }

    public function getSeoKeywords(): string
    {
        return $this->seoKeywords;
    }

    public function setSeoKeywords(string $seoKeywords): void
    {
        $this->seoKeywords = $seoKeywords;
    }

    public function getSeoDescription(): string
    {
        return $this->seoDescription;
    }

    public function setSeoDescription(string $seoDescription): void
    {
        $this->seoDescription = $seoDescription;
    }

    public function getDeleted(): int
    {
        return $this->deleted;
    }

    public function setDeleted(int $deleted): void
    {
        $this->deleted = $deleted;
    }

    public function getCreatedTime(): string
    {
        return $this->createdTime;
    }

    public function setCreatedTime(string $createdTime): void
    {
        $this->createdTime = $createdTime;
    }

    public function getUpdatedTime(): string
    {
        return $this->updatedTime;
    }

    public function setUpdatedTime(string $updatedTime): void
    {
        $this->updatedTime = $updatedTime;
    }

    public function getDeletedTime(): string
    {
        return $this->deletedTime;
    }

    public function setDeletedTime(string $deletedTime): void
    {
        $this->deletedTime = $deletedTime;
    }
}
