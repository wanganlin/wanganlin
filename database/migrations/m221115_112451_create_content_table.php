<?php

use yii\db\Migration;

class m221115_112451_create_content_table extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%content}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->comment('标题'),
            'keywords' => $this->string()->comment('关键词'),
            'description' => $this->string()->comment('描述'),
            'intro' => $this->string()->comment('简介'),
            'content' => $this->text()->comment(''),
            'created_at' => $this->dateTime()->notNull(),
            'updated_at' => $this->dateTime()->notNull(),
            'deleted_at' => $this->dateTime(),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%content}}');
    }
}
