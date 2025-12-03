<?php

declare(strict_types=1);

namespace app\bundles\comment\response\comment;

use Juling\Foundation\Support\ArrayHelper;
use OpenApi\Attributes as OA;

#[OA\Schema(schema: 'CommentResponse')]
class CommentResponse
{
    use ArrayHelper;

    #[OA\Property(property: 'id', description: 'ID', type: 'integer')]
    private int $id;

    #[OA\Property(property: 'parentId', description: '父评论ID', type: 'integer')]
    private int $parentId;

    #[OA\Property(property: 'userId', description: '用户ID', type: 'integer')]
    private int $userId;

    #[OA\Property(property: 'commentableType', description: '评论对象类型', type: 'string')]
    private string $commentableType;

    #[OA\Property(property: 'commentableId', description: '评论对象ID', type: 'integer')]
    private int $commentableId;

    #[OA\Property(property: 'content', description: '评论内容', type: 'string')]
    private string $content;

    #[OA\Property(property: 'ip', description: 'IP地址', type: 'string')]
    private string $ip;

    #[OA\Property(property: 'userAgent', description: 'User Agent', type: 'string')]
    private string $userAgent;

    #[OA\Property(property: 'likeCount', description: '点赞次数', type: 'integer')]
    private int $likeCount;

    #[OA\Property(property: 'status', description: '状态: 1-待审核;2-已发布;3-已拒绝', type: 'integer')]
    private int $status;

    #[OA\Property(property: 'isTop', description: '是否置顶: 0-否;1-是', type: 'integer')]
    private int $isTop;

    #[OA\Property(property: 'isHot', description: '是否热门: 0-否;1-是', type: 'integer')]
    private int $isHot;

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

    public function getParentId(): int
    {
        return $this->parentId;
    }

    public function setParentId(int $parentId): void
    {
        $this->parentId = $parentId;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): void
    {
        $this->userId = $userId;
    }

    public function getCommentableType(): string
    {
        return $this->commentableType;
    }

    public function setCommentableType(string $commentableType): void
    {
        $this->commentableType = $commentableType;
    }

    public function getCommentableId(): int
    {
        return $this->commentableId;
    }

    public function setCommentableId(int $commentableId): void
    {
        $this->commentableId = $commentableId;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    public function getIp(): string
    {
        return $this->ip;
    }

    public function setIp(string $ip): void
    {
        $this->ip = $ip;
    }

    public function getUserAgent(): string
    {
        return $this->userAgent;
    }

    public function setUserAgent(string $userAgent): void
    {
        $this->userAgent = $userAgent;
    }

    public function getLikeCount(): int
    {
        return $this->likeCount;
    }

    public function setLikeCount(int $likeCount): void
    {
        $this->likeCount = $likeCount;
    }

    public function getStatus(): int
    {
        return $this->status;
    }

    public function setStatus(int $status): void
    {
        $this->status = $status;
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
