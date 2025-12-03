<?php

declare(strict_types=1);

namespace app\bundles\favorite\response\favorite;

use Juling\Foundation\Support\ArrayHelper;
use OpenApi\Attributes as OA;

#[OA\Schema(schema: 'FavoriteResponse')]
class FavoriteResponse
{
    use ArrayHelper;

    #[OA\Property(property: 'id', description: 'ID', type: 'integer')]
    private int $id;

    #[OA\Property(property: 'userId', description: '用户ID', type: 'integer')]
    private int $userId;

    #[OA\Property(property: 'favorableType', description: '收藏对象类型', type: 'string')]
    private string $favorableType;

    #[OA\Property(property: 'favorableId', description: '收藏对象ID', type: 'integer')]
    private int $favorableId;

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
