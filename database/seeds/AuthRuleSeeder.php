<?php

use think\migration\Seeder;

class AuthRuleSeeder extends Seeder
{
    public function run()
    {
        $result = DB::table('auth_rules')->count();
        if (empty($result)) {
            $menu = [
                ['name' => '全局设置', 'rule' => 'setting', 'icon' => 'icon-slider',],
                ['name' => '内容管理', 'rule' => 'content', 'icon' => 'icon-form',],
                ['name' => '扩展模块', 'rule' => 'extension', 'icon' => 'icon-app',],
                ['name' => '权限管理', 'rule' => 'permission', 'icon' => 'icon-user',],
                ['name' => '系统管理', 'rule' => 'system', 'icon' => 'icon-set',]
            ];

            foreach ($menu as $key => $item) {
                DB::table('auth_rules')->insert([
                    'id' => $key + 1,
                    'parent_id' => 0,
                    'name' => $item['name'],
                    'rule' => $item['rule'],
                    'icon' => $item['icon'],
                    'is_menu' => 1,
                ]);
            }
        }
    }
}
