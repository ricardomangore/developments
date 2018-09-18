<?php

use Illuminate\Database\Seeder;

class ProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profile')->insert([
        	[
        		'profile' => 'root'
        	],
        	[
        		'profile' => 'admin'
        	],
        	[
        		'prfile' => 'system_user'
        	]
        ]);
    }
}
