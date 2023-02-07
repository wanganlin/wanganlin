<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            RuleSeeder::class,
            RoleSeeder::class,
            RoleAccessSeeder::class,
            UserSeeder::class,
            SettingSeeder::class,
        ]);

        UserRule::factory()->create([
                [0, 'setting', '全局设置', 'layui-icon-slider', 1, 0, 1, '', 0],
                [0, 'content', '内容管理', 'layui-icon-form', 1, 0, 1, '', 0],
                [0, 'extension', '扩展模块', 'layui-icon-app', 1, 0, 1, '', 0],
                [0, 'permission', '权限管理', 'layui-icon-user', 1, 0, 1, '', 0],
                [0, 'system', '系统管理', 'layui-icon-set', 1, 0, 1, '', 0],
            ]
        );

        UserRole::factory()->create([
            'id' => 1,
            'name' => '超级管理员',
            'description' => '系统管理员',
            'rules' => '1,2,3,4,5',
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        UserRoleAccess::factory()->create([
            'id' => 1,
            'user_id' => 1,
            'user_role_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Setting::factory()->create([
            ['parent_id', 'code', 'type', 'store_range', 'value', 'sort_order', 'created_at', 'updated_at'],
            [
                [0, 'site', 'hidden', '', '', 0, date('Y-m-d H:i:s'), date('Y-m-d H:i:s')],
                [0, 'company', 'hidden', '', '', 0, date('Y-m-d H:i:s'), date('Y-m-d H:i:s')],
                [0, 'setting', 'hidden', '', '', 0, date('Y-m-d H:i:s'), date('Y-m-d H:i:s')],
            ]
        );
    }
}
