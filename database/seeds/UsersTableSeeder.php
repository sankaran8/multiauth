<?php

use Illuminate\Database\Seeder;

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
            'name' 		=> str_random(10),
            'email' 	=> 'user@gmail.com',
            'password' 	=> md5('123456'),
        ]);

        DB::table('admins')->insert([
            'name' 			=> str_random(10),
            'email' 		=> 'admin@gmail.com',
            'job_title' 	=> str_random(10),
            'c_password' 	=> md5('123456'),
        ]);
    }
}
