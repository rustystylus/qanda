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
                    'firstname' => 'testuser',
                    'lastname' => 'user',
                    'email' => 'test@live.co.uk',
                    'password' => Hash::make('aga88tsu')
                )
        );
        User::create(
                array(
                    'firstname' => 'translator1',
                    'lastname' => 'translator',
                    'email' => 'testtranslator@live.co.uk',
                    'password' => Hash::make('aga88tsu')
                )
        );
    }
}