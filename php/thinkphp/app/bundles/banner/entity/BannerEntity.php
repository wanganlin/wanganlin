<?php

declare(strict_types=1);

namespace app\bundles\banner\entity;

use Juling\Foundation\Support\ArrayHelper;

class BannerEntity
{
    use ArrayHelper;

    const string getId = 'id'; // ID

    const string getPositionId = 'position_id'; // 广告位ID

    const string getTitle = 'title'; // 标题

    const string getImage = 'image'; // 图片

    const string getLink = 'link'; // 链接

    const string getTarget = 'target'; // 打开方式: _blank-新窗口;_self-当前窗口

    const string getStartTime = 'start_time'; // 开始时间

    const string getEndTime = 'end_time'; // 结束时间

    const string getSort = 'sort'; // 排序

    const string getClickCount = 'click_count'; // 点击次数

    const string getStatus = 'status'; // 状态: 1-正常;2-禁用

    const string getCreatedTime = 'created_time'; // 创建时间

    const string getUpdatedTime = 'updated_time'; // 更新时间

    private int $id;

    private int $positionId;

    private string $title;

    private string $image;

    private string $link;

    private string $target;

    private string $startTime;

    private string $endTime;

    private int $sort;

    private int $clickCount;

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

    public function getPositionId(): int
    {
        return $this->positionId;
    }

    public function setPositionId(int $positionId): void
    {
        $this->positionId = $positionId;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getImage(): string
    {
        return $this->image;
    }

    public function setImage(string $image): void
    {
        $this->image = $image;
    }

    public function getLink(): string
    {
        return $this->link;
    }

    public function setLink(string $link): void
    {
        $this->link = $link;
    }

    public function getTarget(): string
    {
        return $this->target;
    }

    public function setTarget(string $target): void
    {
        $this->target = $target;
    }

    public function getStartTime(): string
    {
        return $this->startTime;
    }

    public function setStartTime(string $startTime): void
    {
        $this->startTime = $startTime;
    }

    public function getEndTime(): string
    {
        return $this->endTime;
    }

    public function setEndTime(string $endTime): void
    {
        $this->endTime = $endTime;
    }

    public function getSort(): int
    {
        return $this->sort;
    }

    public function setSort(int $sort): void
    {
        $this->sort = $sort;
    }

    public function getClickCount(): int
    {
        return $this->clickCount;
    }

    public function setClickCount(int $clickCount): void
    {
        $this->clickCount = $clickCount;
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
