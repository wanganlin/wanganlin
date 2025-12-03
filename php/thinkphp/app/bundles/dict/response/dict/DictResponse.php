<?php

declare(strict_types=1);

namespace app\bundles\dict\response\dict;

use Juling\Foundation\Support\ArrayHelper;
use OpenApi\Attributes as OA;

#[OA\Schema(schema: 'DictResponse')]
class DictResponse
{
    use ArrayHelper;

    #[OA\Property(property: 'id', description: 'ID', type: 'integer')]
    private int $id;

    #[OA\Property(property: 'parentId', description: '父字典ID', type: 'integer')]
    private int $parentId;

    #[OA\Property(property: 'dictType', description: '字典类型', type: 'string')]
    private string $dictType;

    #[OA\Property(property: 'dictLabel', description: '字典标签', type: 'string')]
    private string $dictLabel;

    #[OA\Property(property: 'dictValue', description: '字典值', type: 'string')]
    private string $dictValue;

    #[OA\Property(property: 'sort', description: '排序', type: 'integer')]
    private int $sort;

    #[OA\Property(property: 'status', description: '状态: 1-正常;2-禁用', type: 'integer')]
    private int $status;

    #[OA\Property(property: 'remark', description: '备注', type: 'string')]
    private string $remark;

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

    public function getParentId(): int
    {
        return $this->parentId;
    }

    public function setParentId(int $parentId): void
    {
        $this->parentId = $parentId;
    }

    public function getDictType(): string
    {
        return $this->dictType;
    }

    public function setDictType(string $dictType): void
    {
        $this->dictType = $dictType;
    }

    public function getDictLabel(): string
    {
        return $this->dictLabel;
    }

    public function setDictLabel(string $dictLabel): void
    {
        $this->dictLabel = $dictLabel;
    }

    public function getDictValue(): string
    {
        return $this->dictValue;
    }

    public function setDictValue(string $dictValue): void
    {
        $this->dictValue = $dictValue;
    }

    public function getSort(): int
    {
        return $this->sort;
    }

    public function setSort(int $sort): void
    {
        $this->sort = $sort;
    }

    public function getStatus(): int
    {
        return $this->status;
    }

    public function setStatus(int $status): void
    {
        $this->status = $status;
    }

    public function getRemark(): string
    {
        return $this->remark;
    }

    public function setRemark(string $remark): void
    {
        $this->remark = $remark;
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
