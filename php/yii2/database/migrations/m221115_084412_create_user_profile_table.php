<?php

use yii\db\Migration;

class m221115_084412_create_user_profile_table extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%user_profile}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->unique()->comment('昵称'),
            'gender' => $this->tinyInteger()->unsigned()->comment('性别:1男,2女,3保密'),
            'avatar' => $this->string()->comment('头像'),
            'birthday' => $this->date()->comment('生日'),
            'intro' => $this->string()->comment('简介'),
            'mobile' => $this->string()->comment('手机号'),
            'mobile_verified_time' => $this->dateTime()->comment('手机号认证时间'),
            'email' => $this->string()->comment('邮箱'),
            'email_verified_time' => $this->dateTime()->comment('邮箱认证时间'),
            'created_time' => $this->dateTime()->notNull(),
            'updated_time' => $this->dateTime()->notNull(),
            'deleted_time' => $this->dateTime(),
        ], $tableOptions);

        $this->insert('{{%user_profile}}', [
            'id' => 99,
            'name' => 'admin',
            'gender' => 1,
            'avatar' => '',
            'birthday' => null,
            'intro' => '',
            'mobile' => null,
            'mobile_verified_time' => null,
            'email' => null,
            'email_verified_time' => null,
            'created_time' => date('Y-m-d H:i:s'),
            'updated_time' => date('Y-m-d H:i:s'),
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('{{%user_profile}}');
    }
}
