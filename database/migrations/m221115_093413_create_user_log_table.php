<?php

use yii\db\Migration;

class m221115_093413_create_user_log_table extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%user_log}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->comment('用户ID'),
            'level' => $this->string()->comment('日志级别'),
            'message' => $this->string()->comment('日志内容'),
            'created_time' => $this->dateTime()->notNull(),
            'updated_time' => $this->dateTime()->notNull(),
            'deleted_time' => $this->dateTime(),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%user_log}}');
    }
}
