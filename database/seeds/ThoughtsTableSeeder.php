<?php

use Illuminate\Database\Seeder;

class ThoughtsTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		return factory(App\Thought::class, 20)->create();
	}
}
