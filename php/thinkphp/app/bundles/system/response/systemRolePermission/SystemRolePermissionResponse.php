<?php

declare(strict_types=1);

namespace app\bundles\system\response\systemRolePermission;

use Juling\Foundation\Support\ArrayHelper;
use OpenApi\Attributes as OA;

#[OA\Schema(schema: 'SystemRolePermissionResponse')]
class SystemRolePermissionResponse
{
    use ArrayHelper;

    #[OA\Property(property: 'id', description: 'ID', type: 'integer')]
    private int $id;

    #[OA\Property(property: 'systemRoleId', description: '角色ID', type: 'integer')]
    private int $systemRoleId;

    #[OA\Property(property: 'systemPermissionId', description: '资源ID', type: 'integer')]
    private int $systemPermissionId;

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
