<?php

use think\migration\Seeder;

class AuthGroupSeeder extends Seeder
{
    public function run()
    {
        $result = DB::table('auth_groups')->count();
        if (empty($result)) {
            DB::table('auth_groups')->insert([
                'id' => 1,
                'title' => '超级管理员',
                'rules' => '1',
                'status' => 1,
            ]);
        }
    }
}
