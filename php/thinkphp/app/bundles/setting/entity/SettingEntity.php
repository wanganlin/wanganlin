<?php

declare(strict_types=1);

namespace app\bundles\setting\entity;

use Juling\Foundation\Support\ArrayHelper;

class SettingEntity
{
    use ArrayHelper;

    const string getId = 'id'; // ID

    const string getGroup = 'group'; // 配置分组: basic-基础;seo-SEO;upload-上传;email-邮件;sms-短信

    const string getKey = 'key'; // 配置键

    const string getValue = 'value'; // 配置值

    const string getType = 'type'; // 类型: text-文本;textarea-多行文本;radio-单选;checkbox-多选;image-图片;file-文件

    const string getTitle = 'title'; // 配置标题

    const string getDescription = 'description'; // 配置描述

    const string getSort = 'sort'; // 排序

    const string getCreatedTime = 'created_time'; // 创建时间

    const string getUpdatedTime = 'updated_time'; // 更新时间

    private int $id;

    private string $group;

    private string $key;

    private string $value;

    private string $type;

    private string $title;

    private string $description;

    private int $sort;

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

    public function getGroup(): string
    {
        return $this->group;
    }

    public function setGroup(string $group): void
    {
        $this->group = $group;
    }

    public function getKey(): string
    {
        return $this->key;
    }

    public function setKey(string $key): void
    {
        $this->key = $key;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function setValue(string $value): void
    {
        $this->value = $value;
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
