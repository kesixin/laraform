<?php

use Illuminate\Database\Seeder;

class AdminUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin_users')->insert([
            ['name'=>'admin','password'=>bcrypt('123456'),'email'=>'462369233@qq.com']
        ]);
    }
}
