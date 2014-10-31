<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 * run with      php artisan db:seed
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UserTableSeeder');
		$this->call('QuestionTableSeeder');
	}

}
