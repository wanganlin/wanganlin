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
            'username' => $this->string()->unique()->comment('用户名'),
            'password' => $this->string()->comment('登录密码'),
            'auth_key' => $this->string()->comment('认证密钥'),
            'access_token' => $this->string()->comment('访问令牌'),
            'reset_token' => $this->string()->comment('重设令牌'),
            'last_login_time' => $this->dateTime()->comment('最后登录时间'),
            'last_login_ip' => $this->string()->comment('最后登录IP'),
            'status' => $this->tinyInteger()->comment('登录状态:1正常,2禁用'),
            'created_time' => $this->dateTime()->notNull(),
            'updated_time' => $this->dateTime()->notNull(),
            'deleted_time' => $this->dateTime(),
        ], $tableOptions);

        $this->insert('{{%user}}', [
            'id' => 99,
            'username' => 'admin',
            'password' => 1,
            'auth_key' => '',
            'access_token' => null,
            'reset_token' => '',
            'last_login_time' => null,
            'last_login_ip' => '127.0.0.1',
            'status' => 1,
            'created_time' => date('Y-m-d H:i:s'),
            'updated_time' => date('Y-m-d H:i:s'),
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('{{%user}}');
    }
}
