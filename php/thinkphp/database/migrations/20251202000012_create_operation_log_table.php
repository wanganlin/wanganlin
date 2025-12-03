<?php

use think\migration\db\Column;
use think\migration\Migrator;

class CreateOperationLogTable extends Migrator
{
    public function change(): void
    {
        $this->table('operation_log')->setComment('操作日志表')
            ->addColumn(Column::integer('user_id')->setNull(false)->setDefault(0)->setComment('用户ID'))
            ->addColumn(Column::string('username', 100)->setNull(false)->setDefault('')->setComment('用户名'))
            ->addColumn(Column::string('module', 100)->setNull(false)->setDefault('')->setComment('模块'))
            ->addColumn(Column::string('action', 100)->setNull(false)->setDefault('')->setComment('操作'))
            ->addColumn(Column::string('method', 20)->setNull(false)->setDefault('')->setComment('请求方法'))
            ->addColumn(Column::string('url')->setNull(false)->setDefault('')->setComment('请求URL'))
            ->addColumn(Column::string('ip', 50)->setNull(false)->setDefault('')->setComment('IP地址'))
            ->addColumn(Column::string('user_agent')->setNull(false)->setDefault('')->setComment('User Agent'))
            ->addColumn(Column::text('request_data')->setComment('请求数据'))
            ->addColumn(Column::text('response_data')->setComment('响应数据'))
            ->addColumn(Column::integer('execute_time')->setNull(false)->setDefault(0)->setComment('执行时长(毫秒)'))
            ->addColumn(Column::tinyInteger('status')->setNull(false)->setDefault(1)->setComment('状态: 1-成功;2-失败'))
            ->addColumn(Column::dateTime('created_time')->setNull(false)->setDefault('CURRENT_TIMESTAMP')->setComment('创建时间'))
            ->addIndex('user_id')
            ->addIndex('module')
            ->addIndex('action')
            ->addIndex('status')
            ->addIndex('created_time')
            ->save();
    }
}
