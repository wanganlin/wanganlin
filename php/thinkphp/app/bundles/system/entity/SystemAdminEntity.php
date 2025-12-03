<?php

declare(strict_types=1);

namespace app\bundles\system\entity;

use Juling\Foundation\Support\ArrayHelper;

class SystemAdminEntity
{
    use ArrayHelper;

    const string getId = 'id'; // ID

    const string getUsername = 'username'; // 用户名

    const string getPassword = 'password'; // 登录密码

    const string getName = 'name'; // 昵称

    const string getAvatar = 'avatar'; // 头像

    const string getMobile = 'mobile'; // 手机号码

    const string getEmail = 'email'; // 电子邮箱

    const string getStatus = 'status'; // 状态: 1-正常;2-禁用

    const string getDeleted = 'deleted'; // 删除状态: 0-未删除;1-已删除

    const string getCreatedTime = 'created_time'; // 创建时间

    const string getUpdatedTime = 'updated_time'; // 更新时间

    const string getDeletedTime = 'deleted_time'; // 删除时间

    private int $id;

    private string $username;

    private string $password;

    private string $name;

    private string $avatar;

    private string $mobile;

    private string $email;

    private int $status;

    private int $deleted;

    private string $createdTime;

    private string $updatedTime;

    private string $deletedTime;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getAvatar(): string
    {
        return $this->avatar;
    }

    public function setAvatar(string $avatar): void
    {
        $this->avatar = $avatar;
    }

    public function getMobile(): string
    {
        return $this->mobile;
    }

    public function setMobile(string $mobile): void
    {
        $this->mobile = $mobile;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getStatus(): int
    {
        return $this->status;
    }

    public function setStatus(int $status): void
    {
        $this->status = $status;
    }

    public function getDeleted(): int
    {
        return $this->deleted;
    }

    public function setDeleted(int $deleted): void
    {
        $this->deleted = $deleted;
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

    public function getDeletedTime(): string
    {
        return $this->deletedTime;
    }

    public function setDeletedTime(string $deletedTime): void
    {
        $this->deletedTime = $deletedTime;
    }
}
