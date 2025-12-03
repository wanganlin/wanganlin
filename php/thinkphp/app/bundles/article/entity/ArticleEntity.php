<?php

declare(strict_types=1);

namespace app\bundles\article\entity;

use Juling\Foundation\Support\ArrayHelper;

class ArticleEntity
{
    use ArrayHelper;

    const string getId = 'id'; // ID

    const string getCategoryId = 'category_id'; // 分类ID

    const string getUserId = 'user_id'; // 作者ID

    const string getTitle = 'title'; // 文章标题

    const string getSlug = 'slug'; // 文章别名

    const string getSummary = 'summary'; // 文章摘要

    const string getContent = 'content'; // 文章内容

    const string getCoverImage = 'cover_image'; // 封面图

    const string getImages = 'images'; // 图片集(JSON)

    const string getViewCount = 'view_count'; // 浏览次数

    const string getLikeCount = 'like_count'; // 点赞次数

    const string getCommentCount = 'comment_count'; // 评论次数

    const string getIsRecommend = 'is_recommend'; // 是否推荐: 0-否;1-是

    const string getIsTop = 'is_top'; // 是否置顶: 0-否;1-是

    const string getIsHot = 'is_hot'; // 是否热门: 0-否;1-是

    const string getPublishStatus = 'publish_status'; // 发布状态: 1-草稿;2-已发布;3-下架

    const string getPublishTime = 'publish_time'; // 发布时间

    const string getSeoTitle = 'seo_title'; // SEO标题

    const string getSeoKeywords = 'seo_keywords'; // SEO关键词

    const string getSeoDescription = 'seo_description'; // SEO描述

    const string getSort = 'sort'; // 排序

    const string getTemplate = 'template'; // 模板

    const string getDeleted = 'deleted'; // 删除状态: 0-未删除;1-已删除

    const string getCreatedTime = 'created_time'; // 创建时间

    const string getUpdatedTime = 'updated_time'; // 更新时间

    const string getDeletedTime = 'deleted_time'; // 删除时间

    private int $id;

    private int $categoryId;

    private int $userId;

    private string $title;

    private string $slug;

    private string $summary;

    private string $content;

    private string $coverImage;

    private string $images;

    private int $viewCount;

    private int $likeCount;

    private int $commentCount;

    private int $isRecommend;

    private int $isTop;

    private int $isHot;

    private int $publishStatus;

    private string $publishTime;

    private string $seoTitle;

    private string $seoKeywords;

    private string $seoDescription;

    private int $sort;

    private string $template;

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

    public function getCategoryId(): int
    {
        return $this->categoryId;
    }

    public function setCategoryId(int $categoryId): void
    {
        $this->categoryId = $categoryId;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): void
    {
        $this->userId = $userId;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getSlug(): string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): void
    {
        $this->slug = $slug;
    }

    public function getSummary(): string
    {
        return $this->summary;
    }

    public function setSummary(string $summary): void
    {
        $this->summary = $summary;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    public function getCoverImage(): string
    {
        return $this->coverImage;
    }

    public function setCoverImage(string $coverImage): void
    {
        $this->coverImage = $coverImage;
    }

    public function getImages(): string
    {
        return $this->images;
    }

    public function setImages(string $images): void
    {
        $this->images = $images;
    }

    public function getViewCount(): int
    {
        return $this->viewCount;
    }

    public function setViewCount(int $viewCount): void
    {
        $this->viewCount = $viewCount;
    }

    public function getLikeCount(): int
    {
        return $this->likeCount;
    }

    public function setLikeCount(int $likeCount): void
    {
        $this->likeCount = $likeCount;
    }

    public function getCommentCount(): int
    {
        return $this->commentCount;
    }

    public function setCommentCount(int $commentCount): void
    {
        $this->commentCount = $commentCount;
    }

    public function getIsRecommend(): int
    {
        return $this->isRecommend;
    }

    public function setIsRecommend(int $isRecommend): void
    {
        $this->isRecommend = $isRecommend;
    }

    public function getIsTop(): int
    {
        return $this->isTop;
    }

    public function setIsTop(int $isTop): void
    {
        $this->isTop = $isTop;
    }

    public function getIsHot(): int
    {
        return $this->isHot;
    }

    public function setIsHot(int $isHot): void
    {
        $this->isHot = $isHot;
    }

    public function getPublishStatus(): int
    {
        return $this->publishStatus;
    }

    public function setPublishStatus(int $publishStatus): void
    {
        $this->publishStatus = $publishStatus;
    }

    public function getPublishTime(): string
    {
        return $this->publishTime;
    }

    public function setPublishTime(string $publishTime): void
    {
        $this->publishTime = $publishTime;
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

    public function getSort(): int
    {
        return $this->sort;
    }

    public function setSort(int $sort): void
    {
        $this->sort = $sort;
    }

    public function getTemplate(): string
    {
        return $this->template;
    }

    public function setTemplate(string $template): void
    {
        $this->template = $template;
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
