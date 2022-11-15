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
            'user_id' => $this->integer()->comment('用户ID'),
            'type' => $this->string()->comment('登录类型：username、mobile、email'),
            'passport' => $this->string()->notNull()->unique()->comment('身份唯一标识'),
            'password' => $this->string()->notNull()->comment('授权凭证'),
            'remember_token' => $this->string()->unique()->comment('验证令牌'),
            'reset_token' => $this->string()->unique()->comment('重设令牌'),
            'status' => $this->tinyInteger()->comment('登录状态'),
            'created_at' => $this->dateTime()->notNull(),
            'updated_at' => $this->dateTime()->notNull(),
            'deleted_at' => $this->dateTime(),
        ], $tableOptions);

        $this->insert('{{%user_auth}}', [
            'id' => 1,
            'user_id' => 99,
            'type' => 'username',
            'passport' => 'admin',
            'password' => Yii::$app->getSecurity()->generatePasswordHash('admin123'),
            'password_reset_token' => '',
            'verification_token' => '',
            'status' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('{{%user_auth}}');
    }
}
