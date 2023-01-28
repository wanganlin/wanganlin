<?php

use think\migration\Migrator;
use think\migration\db\Column;

class CreateAuthGroupAccessTable extends Migrator
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 角色授权表
        $table = $this->table('auth_group_access');
        $table->addColumn(Column::unsignedInteger('id')->setUnsigned()->setComment('编号'))
            ->addColumn(Column::unsignedInteger('user_id')->index()->setComment('用户id'))
            ->addColumn(Column::unsignedInteger('auth_group_id')->index()->setComment('用户组id'))
            // ->addColumn(Column::unique(['user_id', 'auth_group_id']))
            ->addIndex('user_id')
            ->addIndex('auth_group_id')
            ->save();

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $this->dropTable('auth_group_access');
    }
}
