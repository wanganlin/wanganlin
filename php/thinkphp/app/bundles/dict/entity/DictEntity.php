<?php

declare(strict_types=1);

namespace app\bundles\dict\entity;

use Juling\Foundation\Support\ArrayHelper;

class DictEntity
{
    use ArrayHelper;

    const string getId = 'id'; // ID

    const string getParentId = 'parent_id'; // 父字典ID

    const string getDictType = 'dict_type'; // 字典类型

    const string getDictLabel = 'dict_label'; // 字典标签

    const string getDictValue = 'dict_value'; // 字典值

    const string getSort = 'sort'; // 排序

    const string getStatus = 'status'; // 状态: 1-正常;2-禁用

    const string getRemark = 'remark'; // 备注

    const string getCreatedTime = 'created_time'; // 创建时间

    const string getUpdatedTime = 'updated_time'; // 更新时间

    private int $id;

    private int $parentId;

    private string $dictType;

    private string $dictLabel;

    private string $dictValue;

    private int $sort;

    private int $status;

    private string $remark;

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
