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
        	[
        		'name' => 'Ricardo Rincon',
        		'email' => 'ricardomangore@gmail.com',
        		'password' => bcrypt('1nt3rm3zz0$'),
        		'profile_id' => 1
        	],
        	[
        		'name' => 'Demo 01',
        		'email' => 'demo01@gmail.com',
        		'password' => bcrypt('1nt3rm3zz0$'),
        		'profile_id' => 2
        	],
        	[
        		'name' => 'Demo 02',
        		'email' => 'demo02@gmail.com',
        		'password' => bcrypt('1nt3rm3zz0$'),
        		'profile_id' => 3
        	],
        ]);
    }
}
