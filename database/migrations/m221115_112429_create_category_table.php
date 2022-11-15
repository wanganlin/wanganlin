<?php

use yii\db\Migration;

class m221115_112429_create_category_table extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%category}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->comment('模型名称'),
            'intro' => $this->string()->comment('模型描述'),
            'fields' => $this->text()->comment('模型附加字段'),
            'system' => $this->tinyInteger()->comment('系统模型:1是，0否'),
            'status' => $this->tinyInteger()->comment('状态:1正常，0不正常'),
            'created_at' => $this->dateTime()->notNull(),
            'updated_at' => $this->dateTime()->notNull(),
            'deleted_at' => $this->dateTime(),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%category}}');
    }
}

