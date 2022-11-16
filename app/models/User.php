<?php

namespace app\models;

use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;
use Yii;

/**
 * This is the model class for table "{{%user}}".
 *
 * @property int $id
 * @property string|null $name 昵称
 * @property string|null $avatar 头像
 * @property string|null $birthday 生日
 * @property string|null $intro 简介
 * @property string $auth_key 身份Key
 * @property string|null $verification_token 验证令牌
 * @property string|null $mobile_verified_time 手机号认证时间
 * @property string|null $email_verified_time 邮箱认证时间
 * @property string|null $last_login_ip 最后登录IP
 * @property string|null $last_login_time 最后登录时间
 * @property string $created_at
 * @property string $updated_at
 * @property string|null $deleted_at
 */
class User extends ActiveRecord implements IdentityInterface
{
    /**
     * @return string
     */
    public static function tableName(): string
    {
        return '{{%user}}';
    }

    /**
     * @return array
     */
    public function behaviors(): array
    {
        return [
            TimestampBehavior::class,
        ];
    }

    /**
     * @return array
     */
    public function rules(): array
    {
        return [
            [['birthday', 'mobile_verified_time', 'email_verified_time', 'last_login_time', 'created_at', 'updated_at', 'deleted_at'], 'safe'],
            [['auth_key', 'created_at', 'updated_at'], 'required'],
            [['name', 'avatar', 'intro', 'verification_token', 'last_login_ip'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['name'], 'unique'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'avatar' => 'Avatar',
            'birthday' => 'Birthday',
            'intro' => 'Intro',
            'auth_key' => 'Auth Key',
            'verification_token' => 'Verification Token',
            'mobile_verified_time' => 'Mobile Verified Time',
            'email_verified_time' => 'Email Verified Time',
            'last_login_ip' => 'Last Login Ip',
            'last_login_time' => 'Last Login Time',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
        ];
    }

    /**
     * @param $id
     * @return User
     */
    public static function findIdentity($id): User
    {
        return static::findOne(['id' => $id]);
    }

    /**
     * @param $name
     * @return User
     */
    public static function findByName($name): User
    {
        return static::findOne(['name' => $name]);
    }

    /**
     * @param $auth_key
     * @return User
     */
    public static function findByAuthKey($auth_key): User
    {
        return static::findOne(['auth_key' => $auth_key]);
    }

    /**
     * @param $token
     * @param $type
     * @return User
     */
    public static function findIdentityByAccessToken($token, $type = null): User
    {
        return static::findOne(['access_token' => $token]);
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->getPrimaryKey();
    }

    /**
     * @return string
     */
    public function getAuthKey(): string
    {
        return $this->auth_key;
    }

    /**
     * @param $authKey
     * @return bool
     */
    public function validateAuthKey($authKey): bool
    {
        return $this->getAuthKey() === $authKey;
    }

    /**
     * @param $password
     * @return bool
     */
    public function validatePassword($password): bool
    {
        return Yii::$app->security->validatePassword($password, $this->password);
    }

    /**
     * Generates "remember me" authentication key
     */
    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }
}
