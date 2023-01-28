<?php

use think\migration\Migrator;
use think\migration\db\Column;

class CreateLogsTable extends Migrator
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 日志表
        $table = $this->table('logs');
        $table->addColumn(Column::unsignedInteger('id')->setUnsigned()->setComment('编号'))
            ->addColumn(Column::unsignedInteger('user_id')->setComment('用户ID'))
            ->addTimestamps()
            ->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $this->dropTable('logs');
    }
}
