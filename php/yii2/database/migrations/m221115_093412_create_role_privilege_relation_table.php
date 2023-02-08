<?php

use yii\db\Migration;

class m221115_093412_create_role_privilege_relation_table extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%role_privilege_relation}}', [
            'id' => $this->primaryKey(),
            'role_id' => $this->integer()->comment('角色id'),
            'permission_id' => $this->integer()->comment('权限id'),
        ], $tableOptions);

        $this->createIndex('role_privilege', '{{%role_privilege_relation}}', ['role_id', 'permission_id'], true);

        $this->insert('{{%role_privilege_relation}}', [
            'id' => 1,
            'role_id' => 1,
            'permission_id' => 1,
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('{{%role_privilege_relation}}');
    }
}
