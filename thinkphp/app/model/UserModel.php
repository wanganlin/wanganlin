<?php

declare(strict_types=1);

namespace app\model;

class UserModel
{
    /**
     * 用户ID
     * @var int
     */
    private int $id;

    /**
     * 用户名
     * @var string
     */
    private string $username;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

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

}
