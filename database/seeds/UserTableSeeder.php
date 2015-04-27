<?php

use \Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;
use \App\User;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('user')->delete();

        User::create([
            'name' => 'Admin',
            'email' => 'admin@test.com',
            'password' => bcrypt('123456')
        ]);
    }

}