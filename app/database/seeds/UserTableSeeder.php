<?php
class UserTableSeeder extends Seeder {
 
    public function run()
    {
        DB::table('users')->delete();
 
        User::create(
        		array(
		            'firstname' => 'admin',
		            'lastname' => 'admin',
		            'email' => 'r.marsden@live.co.uk',
		            'password' => Hash::make('aga88tsu')
        		)
        );
    }
}