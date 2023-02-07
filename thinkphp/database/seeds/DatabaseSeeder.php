<?php

use think\migration\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $this->call([
            AuthRuleSeeder::class,
            AuthGroupSeeder::class,
            AuthGroupAccessSeeder::class,
            UserSeeder::class,
            SettingSeeder::class,
        ]);
    }
}