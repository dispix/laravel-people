<?php

namespace laravelTest\Http\Controllers;

use Illuminate\Http\Request;

class PeopleController extends Controller
{
	public function create(Request $request)
	{
		$params = $request -> all();

		return redirect() -> route('people')->with('success', 'A new people has been created !');
	}

	public function read($id)
	{
		return view('people/people');
	}

	public function readAll()
	{
		return view('people/peopleList');
	}

	public function update($id)
	{

	}

	public function delete($id)
	{

	}

	public function readAllJson(Request $request)
	{
		$collection = [
			['name' => 'Blabla'],
			['Name' => 'Bleble']
		];

		return response() -> json($collection) -> setCallback($request -> input('callback'));
	}
}