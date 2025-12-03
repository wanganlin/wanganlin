<?php

declare(strict_types=1);

namespace app\bundles\system\entity;

use Juling\Foundation\Support\ArrayHelper;

class SystemRolePermissionEntity
{
    use ArrayHelper;

    const string getId = 'id'; // ID

    const string getSystemRoleId = 'system_role_id'; // 角色ID

    const string getSystemPermissionId = 'system_permission_id'; // 资源ID

    const string getCreatedTime = 'created_time'; // 创建时间

    const string getUpdatedTime = 'updated_time'; // 更新时间

    private int $id;

    private int $systemRoleId;

    private int $systemPermissionId;

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

    public function getSystemRoleId(): int
    {
        return $this->systemRoleId;
    }

    public function setSystemRoleId(int $systemRoleId): void
    {
        $this->systemRoleId = $systemRoleId;
    }

    public function getSystemPermissionId(): int
    {
        return $this->systemPermissionId;
    }

    public function setSystemPermissionId(int $systemPermissionId): void
    {
        $this->systemPermissionId = $systemPermissionId;
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
