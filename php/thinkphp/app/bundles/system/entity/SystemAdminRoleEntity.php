<?php

declare(strict_types=1);

namespace app\bundles\system\entity;

use Juling\Foundation\Support\ArrayHelper;

class SystemAdminRoleEntity
{
    use ArrayHelper;

    const string getId = 'id'; // ID

    const string getSystemAdminId = 'system_admin_id'; // 管理员ID

    const string getSystemRoleId = 'system_role_id'; // 角色ID

    const string getCreatedTime = 'created_time'; // 创建时间

    const string getUpdatedTime = 'updated_time'; // 更新时间

    private int $id;

    private int $systemAdminId;

    private int $systemRoleId;

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

    public function getSystemAdminId(): int
    {
        return $this->systemAdminId;
    }

    public function setSystemAdminId(int $systemAdminId): void
    {
        $this->systemAdminId = $systemAdminId;
    }

    public function getSystemRoleId(): int
    {
        return $this->systemRoleId;
    }

    public function setSystemRoleId(int $systemRoleId): void
    {
        $this->systemRoleId = $systemRoleId;
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
