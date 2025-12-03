<?php

declare(strict_types=1);

namespace app\bundles\login\response\loginLog;

use Juling\Foundation\Support\ArrayHelper;
use OpenApi\Attributes as OA;

#[OA\Schema(schema: 'LoginLogResponse')]
class LoginLogResponse
{
    use ArrayHelper;

    #[OA\Property(property: 'id', description: 'ID', type: 'integer')]
    private int $id;

    #[OA\Property(property: 'userId', description: '用户ID', type: 'integer')]
    private int $userId;

    #[OA\Property(property: 'username', description: '用户名', type: 'string')]
    private string $username;

    #[OA\Property(property: 'userType', description: '用户类型: admin-管理员;user-用户', type: 'string')]
    private string $userType;

    #[OA\Property(property: 'ip', description: 'IP地址', type: 'string')]
    private string $ip;

    #[OA\Property(property: 'location', description: '登录地点', type: 'string')]
    private string $location;

    #[OA\Property(property: 'browser', description: '浏览器', type: 'string')]
    private string $browser;

    #[OA\Property(property: 'os', description: '操作系统', type: 'string')]
    private string $os;

    #[OA\Property(property: 'loginStatus', description: '登录状态: 1-成功;2-失败', type: 'integer')]
    private int $loginStatus;

    #[OA\Property(property: 'message', description: '提示信息', type: 'string')]
    private string $message;

    #[OA\Property(property: 'createdTime', description: '创建时间', type: 'string')]
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
