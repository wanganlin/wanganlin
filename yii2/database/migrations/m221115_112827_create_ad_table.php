<?php

use yii\db\Migration;

class m221115_112827_create_ad_table extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%ad}}', [
            'id' => $this->primaryKey(),
            'created_time' => $this->dateTime()->notNull(),
            'updated_time' => $this->dateTime()->notNull(),
            'deleted_time' => $this->dateTime(),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%ad}}');
    }
}
