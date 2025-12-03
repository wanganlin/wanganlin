<?php

declare(strict_types=1);

namespace app\bundles\link\entity;

use Juling\Foundation\Support\ArrayHelper;

class LinkEntity
{
    use ArrayHelper;

    const string getId = 'id'; // ID

    const string getCategoryId = 'category_id'; // 分类ID

    const string getTitle = 'title'; // 标题

    const string getUrl = 'url'; // 链接

    const string getLogo = 'logo'; // LOGO

    const string getDescription = 'description'; // 描述

    const string getRating = 'rating'; // 星级: 1-5

    const string getSort = 'sort'; // 排序

    const string getTarget = 'target'; // 打开方式: _blank-新窗口;_self-当前窗口

    const string getNofollow = 'nofollow'; // 是否nofollow: 0-否;1-是

    const string getStatus = 'status'; // 状态: 1-正常;2-禁用

    const string getCreatedTime = 'created_time'; // 创建时间

    const string getUpdatedTime = 'updated_time'; // 更新时间

    private int $id;

    private int $categoryId;

    private string $title;

    private string $url;

    private string $logo;

    private string $description;

    private int $rating;

    private int $sort;

    private string $target;

    private int $nofollow;

    private int $status;

    private string $createdTime;

    private string $updatedTime;

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

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    public function getLogo(): string
    {
        return $this->logo;
    }

    public function setLogo(string $logo): void
    {
        $this->logo = $logo;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getRating(): int
    {
        return $this->rating;
    }

    public function setRating(int $rating): void
    {
        $this->rating = $rating;
    }

    public function getSort(): int
    {
        return $this->sort;
    }

    public function setSort(int $sort): void
    {
        $this->sort = $sort;
    }

    public function getTarget(): string
    {
        return $this->target;
    }

    public function setTarget(string $target): void
    {
        $this->target = $target;
    }

    public function getNofollow(): int
    {
        return $this->nofollow;
    }

    public function setNofollow(int $nofollow): void
    {
        $this->nofollow = $nofollow;
    }

    public function getStatus(): int
    {
        return $this->status;
    }

    public function setStatus(int $status): void
    {
        $this->status = $status;
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
}
