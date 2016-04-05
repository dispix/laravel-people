<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use laravelPeople\People;
use Faker\Factory as Faker;

class PeopleTest extends TestCase
{
    /**
     * Go to a person page and try to modify data with incorrect email.
     *
     * @return void
     */
    public function testFailUpdate()
    {
		$someone = People::all() -> random();

        $this 	-> visit('/people/'.$someone['id'])
				-> type('wrong email', 'email')
				-> press('Save changes')
				-> seePageIs('/people/'.$someone['id'])
				-> see('The email must be a valid email address.');
    }

	public function testWrongUserPage()
	{
		$this 	-> visit('/people/zae')
				-> see("The page you are trying to access doesn't exist.");
	}

	public function testSuccessCreate()
	{
		$faker = Faker::create();

		$this	-> visit('/people')
				-> type($faker -> firstName(), 'name')
				-> type($faker -> lastName(), 'lastname')
				-> type($faker -> email(), 'email')
				-> type($faker -> date($format = 'Y-m-d', $max = 'now'), 'birthday')
				-> press('Create')
				-> seePageIs('/people')
				-> see('A new person has been created !');
	}

	public function testJson()
	{
		$someone = People::all() -> random();

		$this 	-> json('GET', '/people.json')
				-> seeJson(
				[
					'id' 			=> $someone['id'],
					'name' 			=> $someone['name'],
					'lastname' 		=> $someone['lastname'],
					'email' 		=> $someone['email'],
					'birthday' 		=> $someone['birthday'],
					'created_at' 	=> $someone['created_at'],
					'updated_at' 	=> $someone['updated_at'],
				]);
	}
}