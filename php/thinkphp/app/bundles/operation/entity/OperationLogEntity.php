<?php

declare(strict_types=1);

namespace app\bundles\operation\entity;

use Juling\Foundation\Support\ArrayHelper;

class OperationLogEntity
{
    use ArrayHelper;

    const string getId = 'id'; // ID

    const string getUserId = 'user_id'; // 用户ID

    const string getUsername = 'username'; // 用户名

    const string getModule = 'module'; // 模块

    const string getAction = 'action'; // 操作

    const string getMethod = 'method'; // 请求方法

    const string getUrl = 'url'; // 请求URL

    const string getIp = 'ip'; // IP地址

    const string getUserAgent = 'user_agent'; // User Agent

    const string getRequestData = 'request_data'; // 请求数据

    const string getResponseData = 'response_data'; // 响应数据

    const string getExecuteTime = 'execute_time'; // 执行时长(毫秒)

    const string getStatus = 'status'; // 状态: 1-成功;2-失败

    const string getCreatedTime = 'created_time'; // 创建时间

    private int $id;

    private int $userId;

    private string $username;

    private string $module;

    private string $action;

    private string $method;

    private string $url;

    private string $ip;

    private string $userAgent;

    private string $requestData;

    private string $responseData;

    private int $executeTime;

    private int $status;

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
