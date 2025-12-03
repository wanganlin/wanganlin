<?php

declare(strict_types=1);

namespace app\bundles\comment\entity;

use Juling\Foundation\Support\ArrayHelper;

class CommentEntity
{
    use ArrayHelper;

    const string getId = 'id'; // ID

    const string getParentId = 'parent_id'; // 父评论ID

    const string getUserId = 'user_id'; // 用户ID

    const string getCommentableType = 'commentable_type'; // 评论对象类型

    const string getCommentableId = 'commentable_id'; // 评论对象ID

    const string getContent = 'content'; // 评论内容

    const string getIp = 'ip'; // IP地址

    const string getUserAgent = 'user_agent'; // User Agent

    const string getLikeCount = 'like_count'; // 点赞次数

    const string getStatus = 'status'; // 状态: 1-待审核;2-已发布;3-已拒绝

    const string getIsTop = 'is_top'; // 是否置顶: 0-否;1-是

    const string getIsHot = 'is_hot'; // 是否热门: 0-否;1-是

    const string getDeleted = 'deleted'; // 删除状态: 0-未删除;1-已删除

    const string getCreatedTime = 'created_time'; // 创建时间

    const string getUpdatedTime = 'updated_time'; // 更新时间

    const string getDeletedTime = 'deleted_time'; // 删除时间

    private int $id;

    private int $parentId;

    private int $userId;

    private string $commentableType;

    private int $commentableId;

    private string $content;

    private string $ip;

    private string $userAgent;

    private int $likeCount;

    private int $status;

    private int $isTop;

    private int $isHot;

    private int $deleted;

    private string $createdTime;

    private string $updatedTime;

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
