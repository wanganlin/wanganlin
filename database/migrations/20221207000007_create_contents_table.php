<?php

use think\migration\Migrator;
use think\migration\db\Column;

class CreateContentsTable extends Migrator
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 内容表
        $table = $this->table('contents');
        $table->addColumn(Column::unsignedInteger('id')->setUnsigned()->setComment('编号'))
            ->addColumn(Column::text('content')->setComment('描述'))
            ->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $this->dropTable('contents');
    }
}
