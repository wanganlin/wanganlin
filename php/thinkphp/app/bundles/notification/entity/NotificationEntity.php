<?php

declare(strict_types=1);

namespace app\bundles\notification\entity;

use Juling\Foundation\Support\ArrayHelper;

class NotificationEntity
{
    use ArrayHelper;

    const string getId = 'id'; // ID

    const string getUserId = 'user_id'; // 用户ID

    const string getType = 'type'; // 通知类型: system-系统;message-私信;comment-评论;like-点赞

    const string getTitle = 'title'; // 标题

    const string getContent = 'content'; // 内容

    const string getLink = 'link'; // 跳转链接

    const string getIsRead = 'is_read'; // 是否已读: 0-未读;1-已读

    const string getReadTime = 'read_time'; // 阅读时间

    const string getCreatedTime = 'created_time'; // 创建时间

    private int $id;

    private int $userId;

    private string $type;

    private string $title;

    private string $content;

    private string $link;

    private int $isRead;

    private string $readTime;

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

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    public function getLink(): string
    {
        return $this->link;
    }

    public function setLink(string $link): void
    {
        $this->link = $link;
    }

    public function getIsRead(): int
    {
        return $this->isRead;
    }

    public function setIsRead(int $isRead): void
    {
        $this->isRead = $isRead;
    }

    public function getReadTime(): string
    {
        return $this->readTime;
    }

    public function setReadTime(string $readTime): void
    {
        $this->readTime = $readTime;
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
