<?php

declare(strict_types=1);

namespace app\api\admin\response\auth;

use Juling\Foundation\Support\ArrayHelper;
use OpenApi\Attributes as OA;

#[OA\Schema(description: '登录响应')]
class LoginResponse
{
    use ArrayHelper;

    #[OA\Property(description: '用户数据', type: AdminVo::class)]
    private array $user;

    #[OA\Property(description: '访问令牌', type: 'string')]
    private string $token;

    #[OA\Property(description: '刷新令牌', type: 'string')]
    private string $refreshToken;

    #[OA\Property(description: '令牌过期时间（秒）', type: 'integer')]
    private int $expiresIn;

    public function getUser(): array
    {
        return $this->user;
    }

    public function setUser(array $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getToken(): string
    {
        return $this->token;
    }

    public function setToken(string $token): self
    {
        $this->token = $token;

        return $this;
    }

    public function getRefreshToken(): string
    {
        return $this->refreshToken;
    }

    public function setRefreshToken(string $refreshToken): self
    {
        $this->refreshToken = $refreshToken;

        return $this;
    }

    public function getExpiresIn(): int
    {
        return $this->expiresIn;
    }

    public function setExpiresIn(int $expiresIn): self
    {
        $this->expiresIn = $expiresIn;

        return $this;
    }
}
