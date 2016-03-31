<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Faker\Factory as Faker;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

		foreach (range(1, 50) as $index)
		{

			DB::table('people') -> insert(
			[
				'name' 		=> $faker -> firstName(),
				'lastname' 	=> $faker -> lastName(),
				'email' 	=> $faker -> email(),
				'birthday'	=> $faker -> date($format = 'Y-m-d', $max = 'now')
			]);
		}
    }
}
