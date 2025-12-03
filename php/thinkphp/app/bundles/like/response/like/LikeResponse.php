<?php

declare(strict_types=1);

namespace app\bundles\like\response\like;

use Juling\Foundation\Support\ArrayHelper;
use OpenApi\Attributes as OA;

#[OA\Schema(schema: 'LikeResponse')]
class LikeResponse
{
    use ArrayHelper;

    #[OA\Property(property: 'id', description: 'ID', type: 'integer')]
    private int $id;

    #[OA\Property(property: 'userId', description: '用户ID', type: 'integer')]
    private int $userId;

    #[OA\Property(property: 'likeableType', description: '点赞对象类型', type: 'string')]
    private string $likeableType;

    #[OA\Property(property: 'likeableId', description: '点赞对象ID', type: 'integer')]
    private int $likeableId;

    #[OA\Property(property: 'createdTime', description: '创建时间', type: 'string')]
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
