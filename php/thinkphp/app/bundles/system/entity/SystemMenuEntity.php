<?php

declare(strict_types=1);

namespace app\bundles\system\entity;

use Juling\Foundation\Support\ArrayHelper;

class SystemMenuEntity
{
    use ArrayHelper;

    const string getId = 'id'; // ID

    const string getParentId = 'parent_id'; // 上级菜单ID

    const string getName = 'name'; // 名称

    const string getIcon = 'icon'; // ICON图标

    const string getDescription = 'description'; // 描述

    const string getSort = 'sort'; // 排序

    const string getStatus = 'status'; // 状态: 1-正常;2-禁用

    const string getCreatedTime = 'created_time'; // 创建时间

    const string getUpdatedTime = 'updated_time'; // 更新时间

    private int $id;

    private int $parentId;

    private string $name;

    private string $icon;

    private string $description;

    private int $sort;

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

    public function getIcon(): string
    {
        return $this->icon;
    }

    public function setIcon(string $icon): void
    {
        $this->icon = $icon;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getSort(): int
    {
        return $this->sort;
    }

    public function setSort(int $sort): void
    {
        $this->sort = $sort;
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
