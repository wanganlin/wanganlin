<?php

use yii\db\Migration;

class m221115_084845_create_role_table extends Migration
{
    public function safeUp()
    {

        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%role}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->comment('角色名'),
            'description' => $this->string()->comment('角色描述'),
            'rules' => $this->text()->comment('角色拥有的规则id，多个规则","隔开'),
            'status' => $this->tinyInteger()->comment('状态：1正常，0禁用'),
            'created_at' => $this->dateTime()->notNull(),
            'updated_at' => $this->dateTime()->notNull(),
            'deleted_at' => $this->dateTime(),
        ], $tableOptions);

        $this->insert('{{%role}}', [
            'id' => 1,
            'name' => '超级管理员',
            'description' => '系统管理员',
            'rules' => '1,2,3,4,5',
            'status' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('{{%role}}');
    }
}
