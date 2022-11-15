<?php

use yii\db\Migration;

class m221115_112328_create_setting_table extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%setting}}', [
            'id' => $this->primaryKey(),
            'parent_id' => $this->integer()->comment('父节点id'),
            'code' => $this->string()->comment('配置code'),
            'type' => $this->string()->comment('配置类型：text、select、file、hidden等'),
            'store_range' => $this->string()->comment('配置数组索引'),
            'value' => $this->string()->comment('该项配置的值'),
            'sort_order' => $this->tinyInteger()->comment('排序'),
            'created_at' => $this->dateTime()->notNull(),
            'updated_at' => $this->dateTime()->notNull(),
            'deleted_at' => $this->dateTime(),
        ], $tableOptions);

        $this->createIndex('parent_id', '{{%setting}}', 'parent_id');
        $this->createIndex('code', '{{%setting}}', 'code', true);

        $this->batchInsert('{{%setting}}',
            ['parent_id', 'code', 'type', 'store_range', 'value', 'sort_order', 'created_at', 'updated_at'],
            [
                [0, 'site', 'hidden', '', '', 0, date('Y-m-d H:i:s'), date('Y-m-d H:i:s')],
                [0, 'company', 'hidden', '', '', 0, date('Y-m-d H:i:s'), date('Y-m-d H:i:s')],
                [0, 'setting', 'hidden', '', '', 0, date('Y-m-d H:i:s'), date('Y-m-d H:i:s')],
            ]
        );
    }

    public function safeDown()
    {
        $this->dropTable('{{%setting}}');
    }
}
