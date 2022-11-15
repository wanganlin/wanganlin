<?php

use yii\db\Migration;

class m221115_084411_create_user_table extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->unique()->comment('昵称'),
            'avatar' => $this->string()->comment('头像'),
            'birthday' => $this->date()->comment('生日'),
            'intro' => $this->string()->comment('简介'),
            'auth_key' => $this->string(32)->notNull()->comment('身份Key'),
            'access_token' => $this->string()->comment('访问令牌'),
            'mobile_verified_time' => $this->dateTime()->comment('手机号认证时间'),
            'email_verified_time' => $this->dateTime()->comment('邮箱认证时间'),
            'last_login_ip' => $this->string()->comment('最后登录IP'),
            'last_login_time' => $this->dateTime()->comment('最后登录时间'),
            'created_at' => $this->dateTime()->notNull(),
            'updated_at' => $this->dateTime()->notNull(),
            'deleted_at' => $this->dateTime(),
        ], $tableOptions);

        $this->insert('{{%user}}', [
            'id' => 99,
            'name' => 'admin',
            'avatar' => '',
            'birthday' => null,
            'intro' => '',
            'auth_key' => md5('admin'),
            'access_token' => '',
            'mobile_verified_time' => null,
            'email_verified_time' => null,
            'last_login_ip' => '127.0.0.1',
            'last_login_time' => null,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('{{%user}}');
    }
}
