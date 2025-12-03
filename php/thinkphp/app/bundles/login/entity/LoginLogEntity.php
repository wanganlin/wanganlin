<?php

declare(strict_types=1);

namespace app\bundles\login\entity;

use Juling\Foundation\Support\ArrayHelper;

class LoginLogEntity
{
    use ArrayHelper;

    const string getId = 'id'; // ID

    const string getUserId = 'user_id'; // 用户ID

    const string getUsername = 'username'; // 用户名

    const string getUserType = 'user_type'; // 用户类型: admin-管理员;user-用户

    const string getIp = 'ip'; // IP地址

    const string getLocation = 'location'; // 登录地点

    const string getBrowser = 'browser'; // 浏览器

    const string getOs = 'os'; // 操作系统

    const string getLoginStatus = 'login_status'; // 登录状态: 1-成功;2-失败

    const string getMessage = 'message'; // 提示信息

    const string getCreatedTime = 'created_time'; // 创建时间

    private int $id;

    private int $userId;

    private string $username;

    private string $userType;

    private string $ip;

    private string $location;

    private string $browser;

    private string $os;

    private int $loginStatus;

    private string $message;

    private string $createdTime;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): void
    {
        $this->userId = $userId;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    public function getUserType(): string
    {
        return $this->userType;
    }

    public function setUserType(string $userType): void
    {
        $this->userType = $userType;
    }

    public function getIp(): string
    {
        return $this->ip;
    }

    public function setIp(string $ip): void
    {
        $this->ip = $ip;
    }

    public function getLocation(): string
    {
        return $this->location;
    }

    public function setLocation(string $location): void
    {
        $this->location = $location;
    }

    public function getBrowser(): string
    {
        return $this->browser;
    }

    public function setBrowser(string $browser): void
    {
        $this->browser = $browser;
    }

    public function getOs(): string
    {
        return $this->os;
    }

    public function setOs(string $os): void
    {
        $this->os = $os;
    }

    public function getLoginStatus(): int
    {
        return $this->loginStatus;
    }

    public function setLoginStatus(int $loginStatus): void
    {
        $this->loginStatus = $loginStatus;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function setMessage(string $message): void
    {
        $this->message = $message;
    }

    public function getCreatedTime(): string
    {
        return $this->createdTime;
    }

    public function setCreatedTime(string $createdTime): void
    {
        $this->createdTime = $createdTime;
    }
}
