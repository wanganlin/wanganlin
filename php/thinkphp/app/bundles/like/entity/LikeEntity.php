<?php

declare(strict_types=1);

namespace app\bundles\like\entity;

use Juling\Foundation\Support\ArrayHelper;

class LikeEntity
{
    use ArrayHelper;

    const string getId = 'id'; // ID

    const string getUserId = 'user_id'; // 用户ID

    const string getLikeableType = 'likeable_type'; // 点赞对象类型

    const string getLikeableId = 'likeable_id'; // 点赞对象ID

    const string getCreatedTime = 'created_time'; // 创建时间

    private int $id;

    private int $userId;

    private string $likeableType;

    private int $likeableId;

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

    public function getLikeableType(): string
    {
        return $this->likeableType;
    }

    public function setLikeableType(string $likeableType): void
    {
        $this->likeableType = $likeableType;
    }

    public function getLikeableId(): int
    {
        return $this->likeableId;
    }

    public function setLikeableId(int $likeableId): void
    {
        $this->likeableId = $likeableId;
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
