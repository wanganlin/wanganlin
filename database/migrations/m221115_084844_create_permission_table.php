<?php

use yii\db\Migration;

class m221115_084844_create_permission_table extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%permission}}', [
            'id' => $this->primaryKey(),
            'parent_id' => $this->integer()->comment('父级ID'),
            'name' => $this->string()->comment('规则标识'),
            'title' => $this->string()->comment('规则名称'),
            'icon' => $this->string()->comment('ICON图标'),
            'is_menu' => $this->tinyInteger()->comment('是否为管理菜单：1是，0否'),
            'type' => $this->tinyInteger()->comment('验证类型'),
            'status' => $this->tinyInteger()->comment('状态：为1正常，为0禁用'),
            'condition' => $this->string()->comment('规则表达式，为空表示存在就验证，不为空表示按照条件验证'),
            'sort' => $this->integer()->comment('菜单排序'),
        ], $tableOptions);

        $this->createIndex('name', '{{%permission}}', 'name', true);

        $this->batchInsert('{{%permission}}',
            ['parent_id', 'name', 'title', 'icon', 'menu', 'type', 'status', 'condition', 'sort'],
            [
                [0, 'setting', '全局设置', 'layui-icon-slider', 1, 0, 1, '', 0],
                [0, 'content', '内容管理', 'layui-icon-form', 1, 0, 1, '', 0],
                [0, 'extension', '扩展模块', 'layui-icon-app', 1, 0, 1, '', 0],
                [0, 'permission', '权限管理', 'layui-icon-user', 1, 0, 1, '', 0],
                [0, 'system', '系统管理', 'layui-icon-set', 1, 0, 1, '', 0],
            ]
        );
    }

    public function safeDown()
    {
        $this->dropTable('{{%permission}}');
    }
}

