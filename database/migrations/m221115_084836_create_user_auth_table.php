<?php

use yii\db\Migration;

class m221115_084836_create_user_auth_table extends Migration
{
    /**
     * @throws \yii\base\Exception
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%user_auth}}', [
            'id' => $this->primaryKey(),
            'type' => $this->string()->comment('登录类型:username,mobile,email,auth'),
            'user_id' => $this->integer()->comment('用户ID'),
            'auth_key' => $this->string()->notNull()->unique()->comment('认证密钥'),
            'access_token' => $this->string()->notNull()->comment('访问令牌'),
            'reset_token' => $this->string()->unique()->comment('重设令牌'),
            'status' => $this->tinyInteger()->comment('登录状态:1正常,2禁用'),
            'created_time' => $this->dateTime()->notNull(),
            'updated_time' => $this->dateTime()->notNull(),
            'deleted_time' => $this->dateTime(),
        ], $tableOptions);

        $this->insert('{{%user_auth}}', [
            'id' => 1,
            'type' => 'username',
            'user_id' => 99,
            'auth_key' => 'admin',
            'access_token' => Yii::$app->getSecurity()->generatePasswordHash('admin123'),
            'reset_token' => '',
            'status' => 1,
            'created_time' => date('Y-m-d H:i:s'),
            'updated_time' => date('Y-m-d H:i:s'),
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('{{%user_auth}}');
    }
}
