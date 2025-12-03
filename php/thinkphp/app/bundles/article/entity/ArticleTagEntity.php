<?php

declare(strict_types=1);

namespace app\bundles\article\entity;

use Juling\Foundation\Support\ArrayHelper;

class ArticleTagEntity
{
    use ArrayHelper;

    const string getId = 'id'; // ID

    const string getArticleId = 'article_id'; // 文章ID

    const string getTagId = 'tag_id'; // 标签ID

    const string getCreatedTime = 'created_time'; // 创建时间

    private int $id;

    private int $articleId;

    private int $tagId;

    private string $createdTime;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getArticleId(): int
    {
        return $this->articleId;
    }

    public function setArticleId(int $articleId): void
    {
        $this->articleId = $articleId;
    }

    public function getTagId(): int
    {
        return $this->tagId;
    }

    public function setTagId(int $tagId): void
    {
        $this->tagId = $tagId;
    }

    public function getCreatedTime(): string
    {
        return $this->createdTime;
    }

    public function setCreatedTime(string $createdTime): void
    {
        $this->createdTime = $createdTime;
    }
}
