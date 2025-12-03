<?php

declare(strict_types=1);

namespace app\bundles\system\entity;

use Juling\Foundation\Support\ArrayHelper;

class SystemPermissionEntity
{
    use ArrayHelper;

    const string getId = 'id'; // ID

    const string getCode = 'code'; // 资源码

    const string getName = 'name'; // 资源名称

    const string getStatus = 'status'; // 状态: 1-正常;2-禁用

    const string getCreatedTime = 'created_time'; // 创建时间

    const string getUpdatedTime = 'updated_time'; // 更新时间

    private int $id;

    private string $code;

    private string $name;

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

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
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
