<?php

use yii\db\Migration;

class m221115_093412_create_user_role_relation_table extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%user_role_relation}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->comment('用户id'),
            'role_id' => $this->integer()->comment('用户组id'),
        ], $tableOptions);

        $this->createIndex('usre_role', '{{%user_role_relation}}', ['user_id', 'role_id'], true);

        $this->insert('{{%user_role_relation}}', [
            'id' => 1,
            'user_id' => 1,
            'role_id' => 1,
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('{{%user_role_relation}}');
    }
}
