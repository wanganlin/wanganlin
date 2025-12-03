<?php

declare(strict_types=1);

namespace app\bundles\favorite\entity;

use Juling\Foundation\Support\ArrayHelper;

class FavoriteEntity
{
    use ArrayHelper;

    const string getId = 'id'; // ID

    const string getUserId = 'user_id'; // 用户ID

    const string getFavorableType = 'favorable_type'; // 收藏对象类型

    const string getFavorableId = 'favorable_id'; // 收藏对象ID

    const string getCreatedTime = 'created_time'; // 创建时间

    private int $id;

    private int $userId;

    private string $favorableType;

    private int $favorableId;

    private string $createdTime;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): void
    {
        $this->userId = $userId;
    }

    public function getFavorableType(): string
    {
        return $this->favorableType;
    }

    public function setFavorableType(string $favorableType): void
    {
        $this->favorableType = $favorableType;
    }

    public function getFavorableId(): int
    {
        return $this->favorableId;
    }

    public function setFavorableId(int $favorableId): void
    {
        $this->favorableId = $favorableId;
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
