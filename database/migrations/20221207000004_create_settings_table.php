<?php

use think\migration\Migrator;
use think\migration\db\Column;

class CreateSettingsTable extends Migrator
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 配置表
        $table = $this->table('settings');
        $table->addColumn(Column::unsignedInteger('id')->setUnsigned()->setComment('编号'))
            ->addColumn(Column::unsignedInteger('parent_id')->setDefault(0)->setComment('父节点id'))
            ->addColumn(Column::string('name')->setDefault('')->setComment('配置名称'))
            ->addColumn(Column::string('code')->setDefault('')->setComment('配置code'))
            ->addColumn(Column::string('type')->setDefault('')->setComment('配置类型：text、select、file、hidden等'))
            ->addColumn(Column::string('range')->setDefault('')->setComment('配置数组索引'))
            ->addColumn(Column::string('value')->setDefault('')->setComment('该项配置的值'))
            ->addColumn(Column::tinyInteger('sort')->setDefault(1)->setComment('排序'))
            ->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $this->dropTable('settings');
    }
}
