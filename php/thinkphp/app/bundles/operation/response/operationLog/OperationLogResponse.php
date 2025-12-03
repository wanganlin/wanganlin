<?php

declare(strict_types=1);

namespace app\bundles\operation\response\operationLog;

use Juling\Foundation\Support\ArrayHelper;
use OpenApi\Attributes as OA;

#[OA\Schema(schema: 'OperationLogResponse')]
class OperationLogResponse
{
    use ArrayHelper;

    #[OA\Property(property: 'id', description: 'ID', type: 'integer')]
    private int $id;

    #[OA\Property(property: 'userId', description: '用户ID', type: 'integer')]
    private int $userId;

    #[OA\Property(property: 'username', description: '用户名', type: 'string')]
    private string $username;

    #[OA\Property(property: 'module', description: '模块', type: 'string')]
    private string $module;

    #[OA\Property(property: 'action', description: '操作', type: 'string')]
    private string $action;

    #[OA\Property(property: 'method', description: '请求方法', type: 'string')]
    private string $method;

    #[OA\Property(property: 'url', description: '请求URL', type: 'string')]
    private string $url;

    #[OA\Property(property: 'ip', description: 'IP地址', type: 'string')]
    private string $ip;

    #[OA\Property(property: 'userAgent', description: 'User Agent', type: 'string')]
    private string $userAgent;

    #[OA\Property(property: 'requestData', description: '请求数据', type: 'string')]
    private string $requestData;

    #[OA\Property(property: 'responseData', description: '响应数据', type: 'string')]
    private string $responseData;

    #[OA\Property(property: 'executeTime', description: '执行时长(毫秒)', type: 'integer')]
    private int $executeTime;

    #[OA\Property(property: 'status', description: '状态: 1-成功;2-失败', type: 'integer')]
    private int $status;

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

    public function getModule(): string
    {
        return $this->module;
    }

    public function setModule(string $module): void
    {
        $this->module = $module;
    }

    public function getAction(): string
    {
        return $this->action;
    }

    public function setAction(string $action): void
    {
        $this->action = $action;
    }

    public function getMethod(): string
    {
        return $this->method;
    }

    public function setMethod(string $method): void
    {
        $this->method = $method;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    public function getIp(): string
    {
        return $this->ip;
    }

    public function setIp(string $ip): void
    {
        $this->ip = $ip;
    }

    public function getUserAgent(): string
    {
        return $this->userAgent;
    }

    public function setUserAgent(string $userAgent): void
    {
        $this->userAgent = $userAgent;
    }

    public function getRequestData(): string
    {
        return $this->requestData;
    }

    public function setRequestData(string $requestData): void
    {
        $this->requestData = $requestData;
    }

    public function getResponseData(): string
    {
        return $this->responseData;
    }

    public function setResponseData(string $responseData): void
    {
        $this->responseData = $responseData;
    }

    public function getExecuteTime(): int
    {
        return $this->executeTime;
    }

    public function setExecuteTime(int $executeTime): void
    {
        $this->executeTime = $executeTime;
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
}
