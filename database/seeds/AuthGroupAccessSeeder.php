<?php

use think\migration\Seeder;
class AuthGroupAccessSeeder extends Seeder
{
    public function run()
    {
        $result = DB::table('auth_group_access')->count();
        if (empty($result)) {
            DB::table('auth_group_access')->insert([
                'user_id' => 1,
                'auth_group_id' => 1,
            ]);
        }
    }
}
