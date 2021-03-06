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
        User::create(
                array(
                    'firstname' => 'user1',
                    'lastname' => 'u',
                    'email' => 'user1@live.co.uk',
                    'password' => Hash::make('aga88tsu')
                )
        );
        User::create(
                array(
                    'firstname' => 'user2',
                    'lastname' => 'u',
                    'email' => 'user2@live.co.uk',
                    'password' => Hash::make('aga88tsu')
                )
        );
    }
}
