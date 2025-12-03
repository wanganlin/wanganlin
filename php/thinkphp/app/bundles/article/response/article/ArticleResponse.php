<?php

declare(strict_types=1);

namespace app\bundles\article\response\article;

use Juling\Foundation\Support\ArrayHelper;
use OpenApi\Attributes as OA;

#[OA\Schema(schema: 'ArticleResponse')]
class ArticleResponse
{
    use ArrayHelper;

    #[OA\Property(property: 'id', description: 'ID', type: 'integer')]
    private int $id;

    #[OA\Property(property: 'categoryId', description: '分类ID', type: 'integer')]
    private int $categoryId;

    #[OA\Property(property: 'userId', description: '作者ID', type: 'integer')]
    private int $userId;

    #[OA\Property(property: 'title', description: '文章标题', type: 'string')]
    private string $title;

    #[OA\Property(property: 'slug', description: '文章别名', type: 'string')]
    private string $slug;

    #[OA\Property(property: 'summary', description: '文章摘要', type: 'string')]
    private string $summary;

    #[OA\Property(property: 'content', description: '文章内容', type: 'string')]
    private string $content;

    #[OA\Property(property: 'coverImage', description: '封面图', type: 'string')]
    private string $coverImage;

    #[OA\Property(property: 'images', description: '图片集(JSON)', type: 'string')]
    private string $images;

    #[OA\Property(property: 'viewCount', description: '浏览次数', type: 'integer')]
    private int $viewCount;

    #[OA\Property(property: 'likeCount', description: '点赞次数', type: 'integer')]
    private int $likeCount;

    #[OA\Property(property: 'commentCount', description: '评论次数', type: 'integer')]
    private int $commentCount;

    #[OA\Property(property: 'isRecommend', description: '是否推荐: 0-否;1-是', type: 'integer')]
    private int $isRecommend;

    #[OA\Property(property: 'isTop', description: '是否置顶: 0-否;1-是', type: 'integer')]
    private int $isTop;

    #[OA\Property(property: 'isHot', description: '是否热门: 0-否;1-是', type: 'integer')]
    private int $isHot;

    #[OA\Property(property: 'publishStatus', description: '发布状态: 1-草稿;2-已发布;3-下架', type: 'integer')]
    private int $publishStatus;

    #[OA\Property(property: 'publishTime', description: '发布时间', type: 'string')]
    private string $publishTime;

    #[OA\Property(property: 'seoTitle', description: 'SEO标题', type: 'string')]
    private string $seoTitle;

    #[OA\Property(property: 'seoKeywords', description: 'SEO关键词', type: 'string')]
    private string $seoKeywords;

    #[OA\Property(property: 'seoDescription', description: 'SEO描述', type: 'string')]
    private string $seoDescription;

    #[OA\Property(property: 'sort', description: '排序', type: 'integer')]
    private int $sort;

    #[OA\Property(property: 'template', description: '模板', type: 'string')]
    private string $template;

    #[OA\Property(property: 'deleted', description: '删除状态: 0-未删除;1-已删除', type: 'integer')]
    private int $deleted;

    #[OA\Property(property: 'createdTime', description: '创建时间', type: 'string')]
    private string $createdTime;

    #[OA\Property(property: 'updatedTime', description: '更新时间', type: 'string')]
    private string $updatedTime;

    #[OA\Property(property: 'deletedTime', description: '删除时间', type: 'string')]
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
