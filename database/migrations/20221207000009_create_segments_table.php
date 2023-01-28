<?php

use think\migration\Migrator;
use think\migration\db\Column;

class CreateSegmentsTable extends Migrator
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 内容片段表
        $table = $this->table('segments');
        $table->addColumn(Column::unsignedInteger('id')->setUnsigned()->setComment('编号'))
            ->addTimestamps()
            ->addSoftDelete()
        ->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $this->dropTable('segments');
    }
}
