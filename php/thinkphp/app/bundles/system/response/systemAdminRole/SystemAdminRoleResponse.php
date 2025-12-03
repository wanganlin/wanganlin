<?php

declare(strict_types=1);

namespace app\bundles\system\response\systemAdminRole;

use Juling\Foundation\Support\ArrayHelper;
use OpenApi\Attributes as OA;

#[OA\Schema(schema: 'SystemAdminRoleResponse')]
class SystemAdminRoleResponse
{
    use ArrayHelper;

    #[OA\Property(property: 'id', description: 'ID', type: 'integer')]
    private int $id;

    #[OA\Property(property: 'systemAdminId', description: '管理员ID', type: 'integer')]
    private int $systemAdminId;

    #[OA\Property(property: 'systemRoleId', description: '角色ID', type: 'integer')]
    private int $systemRoleId;

    #[OA\Property(property: 'createdTime', description: '创建时间', type: 'string')]
    private string $createdTime;

    #[OA\Property(property: 'updatedTime', description: '更新时间', type: 'string')]
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
