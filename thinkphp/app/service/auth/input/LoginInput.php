<?php

declare(strict_types=1);

namespace app\service\auth\input;

class LoginInput
{
    /**
     * @var string
     */
    private string $username;

    /**
     * @var string
     */
    private string $password;

    /**
     * @var bool
     */
    private bool $rememberMe;

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return bool
     */
    public function isRememberMe(): bool
    {
        return $this->rememberMe;
    }

    /**
     * @param bool $rememberMe
     */
    public function setRememberMe(bool $rememberMe): void
    {
        $this->rememberMe = $rememberMe;
    }
}
