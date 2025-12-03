<?php

declare(strict_types=1);

namespace app\bundles\tag\entity;

use Juling\Foundation\Support\ArrayHelper;

class TagEntity
{
    use ArrayHelper;

    const string getId = 'id'; // ID

    const string getName = 'name'; // 标签名称

    const string getSlug = 'slug'; // 标签别名

    const string getDescription = 'description'; // 标签描述

    const string getUseCount = 'use_count'; // 使用次数

    const string getColor = 'color'; // 标签颜色

    const string getStatus = 'status'; // 状态: 1-正常;2-禁用

    const string getCreatedTime = 'created_time'; // 创建时间

    const string getUpdatedTime = 'updated_time'; // 更新时间

    private int $id;

    private string $name;

    private string $slug;

    private string $description;

    private int $useCount;

    private string $color;

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

    public function getUseCount(): int
    {
        return $this->useCount;
    }

    public function setUseCount(int $useCount): void
    {
        $this->useCount = $useCount;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
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
