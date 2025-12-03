<?php

declare(strict_types=1);

namespace app\bundles\user\response\user;

use Juling\Foundation\Support\ArrayHelper;
use OpenApi\Attributes as OA;

#[OA\Schema(schema: 'UserResponse')]
class UserResponse
{
    use ArrayHelper;

    #[OA\Property(property: 'id', description: 'ID', type: 'integer')]
    private int $id;

    #[OA\Property(property: 'username', description: '用户名', type: 'string')]
    private string $username;

    #[OA\Property(property: 'password', description: '登录密码', type: 'string')]
    private string $password;

    #[OA\Property(property: 'nickname', description: '昵称', type: 'string')]
    private string $nickname;

    #[OA\Property(property: 'realName', description: '真实姓名', type: 'string')]
    private string $realName;

    #[OA\Property(property: 'avatar', description: '头像', type: 'string')]
    private string $avatar;

    #[OA\Property(property: 'mobile', description: '手机号码', type: 'string')]
    private string $mobile;

    #[OA\Property(property: 'email', description: '电子邮箱', type: 'string')]
    private string $email;

    #[OA\Property(property: 'gender', description: '性别: 0-未知;1-男;2-女', type: 'integer')]
    private int $gender;

    #[OA\Property(property: 'birthday', description: '生日', type: 'string')]
    private string $birthday;

    #[OA\Property(property: 'province', description: '省份', type: 'string')]
    private string $province;

    #[OA\Property(property: 'city', description: '城市', type: 'string')]
    private string $city;

    #[OA\Property(property: 'district', description: '区县', type: 'string')]
    private string $district;

    #[OA\Property(property: 'address', description: '详细地址', type: 'string')]
    private string $address;

    #[OA\Property(property: 'idCard', description: '身份证号', type: 'string')]
    private string $idCard;

    #[OA\Property(property: 'bio', description: '个人简介', type: 'string')]
    private string $bio;

    #[OA\Property(property: 'points', description: '积分', type: 'integer')]
    private int $points;

    #[OA\Property(property: 'balance', description: '余额', type: 'float')]
    private float $balance;

    #[OA\Property(property: 'level', description: '用户等级', type: 'integer')]
    private int $level;

    #[OA\Property(property: 'status', description: '状态: 1-正常;2-禁用;3-冻结', type: 'integer')]
    private int $status;

    #[OA\Property(property: 'registerIp', description: '注册IP', type: 'string')]
    private string $registerIp;

    #[OA\Property(property: 'lastLoginIp', description: '最后登录IP', type: 'string')]
    private string $lastLoginIp;

    #[OA\Property(property: 'lastLoginTime', description: '最后登录时间', type: 'string')]
    private string $lastLoginTime;

    #[OA\Property(property: 'isVerified', description: '是否实名认证: 0-否;1-是', type: 'integer')]
    private int $isVerified;

    #[OA\Property(property: 'emailVerified', description: '邮箱是否验证: 0-否;1-是', type: 'integer')]
    private int $emailVerified;

    #[OA\Property(property: 'mobileVerified', description: '手机是否验证: 0-否;1-是', type: 'integer')]
    private int $mobileVerified;

    #[OA\Property(property: 'openid', description: '微信OpenID', type: 'string')]
    private string $openid;

    #[OA\Property(property: 'unionid', description: '微信UnionID', type: 'string')]
    private string $unionid;

    #[OA\Property(property: 'extraData', description: '扩展数据(JSON)', type: 'string')]
    private string $extraData;

    #[OA\Property(property: 'deleted', description: '删除状态: 0-未删除;1-已删除', type: 'integer')]
    private int $deleted;

    #[OA\Property(property: 'createdTime', description: '创建时间', type: 'string')]
    private string $createdTime;

    #[OA\Property(property: 'updatedTime', description: '更新时间', type: 'string')]
    private string $updatedTime;

    #[OA\Property(property: 'deletedTime', description: '删除时间', type: 'string')]
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

    public function getNickname(): string
    {
        return $this->nickname;
    }

    public function setNickname(string $nickname): void
    {
        $this->nickname = $nickname;
    }

    public function getRealName(): string
    {
        return $this->realName;
    }

    public function setRealName(string $realName): void
    {
        $this->realName = $realName;
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

    public function getGender(): int
    {
        return $this->gender;
    }

    public function setGender(int $gender): void
    {
        $this->gender = $gender;
    }

    public function getBirthday(): string
    {
        return $this->birthday;
    }

    public function setBirthday(string $birthday): void
    {
        $this->birthday = $birthday;
    }

    public function getProvince(): string
    {
        return $this->province;
    }

    public function setProvince(string $province): void
    {
        $this->province = $province;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    public function getDistrict(): string
    {
        return $this->district;
    }

    public function setDistrict(string $district): void
    {
        $this->district = $district;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    public function getIdCard(): string
    {
        return $this->idCard;
    }

    public function setIdCard(string $idCard): void
    {
        $this->idCard = $idCard;
    }

    public function getBio(): string
    {
        return $this->bio;
    }

    public function setBio(string $bio): void
    {
        $this->bio = $bio;
    }

    public function getPoints(): int
    {
        return $this->points;
    }

    public function setPoints(int $points): void
    {
        $this->points = $points;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }

    public function setBalance(float $balance): void
    {
        $this->balance = $balance;
    }

    public function getLevel(): int
    {
        return $this->level;
    }

    public function setLevel(int $level): void
    {
        $this->level = $level;
    }

    public function getStatus(): int
    {
        return $this->status;
    }

    public function setStatus(int $status): void
    {
        $this->status = $status;
    }

    public function getRegisterIp(): string
    {
        return $this->registerIp;
    }

    public function setRegisterIp(string $registerIp): void
    {
        $this->registerIp = $registerIp;
    }

    public function getLastLoginIp(): string
    {
        return $this->lastLoginIp;
    }

    public function setLastLoginIp(string $lastLoginIp): void
    {
        $this->lastLoginIp = $lastLoginIp;
    }

    public function getLastLoginTime(): string
    {
        return $this->lastLoginTime;
    }

    public function setLastLoginTime(string $lastLoginTime): void
    {
        $this->lastLoginTime = $lastLoginTime;
    }

    public function getIsVerified(): int
    {
        return $this->isVerified;
    }

    public function setIsVerified(int $isVerified): void
    {
        $this->isVerified = $isVerified;
    }

    public function getEmailVerified(): int
    {
        return $this->emailVerified;
    }

    public function setEmailVerified(int $emailVerified): void
    {
        $this->emailVerified = $emailVerified;
    }

    public function getMobileVerified(): int
    {
        return $this->mobileVerified;
    }

    public function setMobileVerified(int $mobileVerified): void
    {
        $this->mobileVerified = $mobileVerified;
    }

    public function getOpenid(): string
    {
        return $this->openid;
    }

    public function setOpenid(string $openid): void
    {
        $this->openid = $openid;
    }

    public function getUnionid(): string
    {
        return $this->unionid;
    }

    public function setUnionid(string $unionid): void
    {
        $this->unionid = $unionid;
    }

    public function getExtraData(): string
    {
        return $this->extraData;
    }

    public function setExtraData(string $extraData): void
    {
        $this->extraData = $extraData;
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
