<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'testman',
            'email' => 'test@gmail.com',
            'password' => bcrypt('testtest')
        ]);
        DB::table('users')->insert([
            'name' => 'testman2',
            'email' => 'test2@gmail.com',
            'password' => bcrypt('testtest')
        ]);
    }
}
