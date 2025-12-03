<?php

declare(strict_types=1);

namespace app\bundles\user\entity;

use Juling\Foundation\Support\ArrayHelper;

class UserEntity
{
    use ArrayHelper;

    const string getId = 'id'; // ID

    const string getUsername = 'username'; // 用户名

    const string getPassword = 'password'; // 登录密码

    const string getNickname = 'nickname'; // 昵称

    const string getRealName = 'real_name'; // 真实姓名

    const string getAvatar = 'avatar'; // 头像

    const string getMobile = 'mobile'; // 手机号码

    const string getEmail = 'email'; // 电子邮箱

    const string getGender = 'gender'; // 性别: 0-未知;1-男;2-女

    const string getBirthday = 'birthday'; // 生日

    const string getProvince = 'province'; // 省份

    const string getCity = 'city'; // 城市

    const string getDistrict = 'district'; // 区县

    const string getAddress = 'address'; // 详细地址

    const string getIdCard = 'id_card'; // 身份证号

    const string getBio = 'bio'; // 个人简介

    const string getPoints = 'points'; // 积分

    const string getBalance = 'balance'; // 余额

    const string getLevel = 'level'; // 用户等级

    const string getStatus = 'status'; // 状态: 1-正常;2-禁用;3-冻结

    const string getRegisterIp = 'register_ip'; // 注册IP

    const string getLastLoginIp = 'last_login_ip'; // 最后登录IP

    const string getLastLoginTime = 'last_login_time'; // 最后登录时间

    const string getIsVerified = 'is_verified'; // 是否实名认证: 0-否;1-是

    const string getEmailVerified = 'email_verified'; // 邮箱是否验证: 0-否;1-是

    const string getMobileVerified = 'mobile_verified'; // 手机是否验证: 0-否;1-是

    const string getOpenid = 'openid'; // 微信OpenID

    const string getUnionid = 'unionid'; // 微信UnionID

    const string getExtraData = 'extra_data'; // 扩展数据(JSON)

    const string getDeleted = 'deleted'; // 删除状态: 0-未删除;1-已删除

    const string getCreatedTime = 'created_time'; // 创建时间

    const string getUpdatedTime = 'updated_time'; // 更新时间

    const string getDeletedTime = 'deleted_time'; // 删除时间

    private int $id;

    private string $username;

    private string $password;

    private string $nickname;

    private string $realName;

    private string $avatar;

    private string $mobile;

    private string $email;

    private int $gender;

    private string $birthday;

    private string $province;

    private string $city;

    private string $district;

    private string $address;

    private string $idCard;

    private string $bio;

    private int $points;

    private float $balance;

    private int $level;

    private int $status;

    private string $registerIp;

    private string $lastLoginIp;

    private string $lastLoginTime;

    private int $isVerified;

    private int $emailVerified;

    private int $mobileVerified;

    private string $openid;

    private string $unionid;

    private string $extraData;

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
