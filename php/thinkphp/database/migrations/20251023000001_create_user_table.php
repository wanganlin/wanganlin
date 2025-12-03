<?php

use think\migration\db\Column;
use think\migration\Migrator;

class CreateUserTable extends Migrator
{
    public function change(): void
    {
        $this->table('user')->setComment('用户表')
            ->addColumn(Column::string('username')->setNull(false)->setDefault('')->setComment('用户名'))
            ->addColumn(Column::string('password')->setNull(false)->setDefault('')->setComment('登录密码'))
            ->addColumn(Column::string('nickname')->setNull(false)->setDefault('')->setComment('昵称'))
            ->addColumn(Column::string('real_name')->setNull(false)->setDefault('')->setComment('真实姓名'))
            ->addColumn(Column::string('avatar')->setNull(false)->setDefault('')->setComment('头像'))
            ->addColumn(Column::string('mobile', 20)->setNull(false)->setDefault('')->setComment('手机号码'))
            ->addColumn(Column::string('email')->setNull(false)->setDefault('')->setComment('电子邮箱'))
            ->addColumn(Column::tinyInteger('gender')->setNull(false)->setDefault(0)->setComment('性别: 0-未知;1-男;2-女'))
            ->addColumn(Column::date('birthday')->setComment('生日'))
            ->addColumn(Column::string('province', 50)->setNull(false)->setDefault('')->setComment('省份'))
            ->addColumn(Column::string('city', 50)->setNull(false)->setDefault('')->setComment('城市'))
            ->addColumn(Column::string('district', 50)->setNull(false)->setDefault('')->setComment('区县'))
            ->addColumn(Column::string('address')->setNull(false)->setDefault('')->setComment('详细地址'))
            ->addColumn(Column::string('id_card', 18)->setNull(false)->setDefault('')->setComment('身份证号'))
            ->addColumn(Column::text('bio')->setComment('个人简介'))
            ->addColumn(Column::integer('points')->setNull(false)->setDefault(0)->setComment('积分'))
            ->addColumn(Column::decimal('balance', 10, 2)->setNull(false)->setDefault(0)->setComment('余额'))
            ->addColumn(Column::tinyInteger('level')->setNull(false)->setDefault(1)->setComment('用户等级'))
            ->addColumn(Column::tinyInteger('status')->setNull(false)->setDefault(1)->setComment('状态: 1-正常;2-禁用;3-冻结'))
            ->addColumn(Column::string('register_ip', 50)->setNull(false)->setDefault('')->setComment('注册IP'))
            ->addColumn(Column::string('last_login_ip', 50)->setNull(false)->setDefault('')->setComment('最后登录IP'))
            ->addColumn(Column::dateTime('last_login_time')->setComment('最后登录时间'))
            ->addColumn(Column::tinyInteger('is_verified')->setNull(false)->setDefault(0)->setComment('是否实名认证: 0-否;1-是'))
            ->addColumn(Column::tinyInteger('email_verified')->setNull(false)->setDefault(0)->setComment('邮箱是否验证: 0-否;1-是'))
            ->addColumn(Column::tinyInteger('mobile_verified')->setNull(false)->setDefault(0)->setComment('手机是否验证: 0-否;1-是'))
            ->addColumn(Column::string('openid')->setNull(false)->setDefault('')->setComment('微信OpenID'))
            ->addColumn(Column::string('unionid')->setNull(false)->setDefault('')->setComment('微信UnionID'))
            ->addColumn(Column::text('extra_data')->setComment('扩展数据(JSON)'))
            ->addColumn(Column::tinyInteger('deleted')->setNull(false)->setDefault(0)->setComment('删除状态: 0-未删除;1-已删除'))
            ->addColumn(Column::dateTime('created_time')->setNull(false)->setDefault('CURRENT_TIMESTAMP')->setComment('创建时间'))
            ->addColumn(Column::dateTime('updated_time')->setNull(false)->setDefault('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP')->setComment('更新时间'))
            ->addColumn(Column::dateTime('deleted_time')->setComment('删除时间'))
            ->addIndex('username', ['unique' => true])
            ->addIndex('mobile')
            ->addIndex('email')
            ->addIndex('openid')
            ->addIndex('unionid')
            ->addIndex('status')
            ->addIndex('level')
            ->addIndex('deleted')
            ->addIndex('last_login_time')
            ->addIndex('created_time')
            ->save();
    }
}
