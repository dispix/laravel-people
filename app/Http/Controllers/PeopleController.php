<?php

namespace laravelPeople\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use laravelPeople\People;

class PeopleController extends Controller
{
	// Propper name casing, see http://www.media-division.com/correct-name-capitalization-in-php/
	private function titleCase($string)
	{
		$word_splitters 		= array(' ', '-', "O'", "L'", "D'", 'St.', 'Mc');
		$lowercase_exceptions 	= array('the', 'van', 'den', 'von', 'und', 'der', 'de', 'da', 'of', 'and', "l'", "d'");
		$uppercase_exceptions 	= array('III', 'IV', 'VI', 'VII', 'VIII', 'IX');

		$string = strtolower($string);

		foreach ($word_splitters as $delimiter)
		{
			$words 		= explode($delimiter, $string);
			$newwords 	= array();

			foreach ($words as $word)
			{
				if (in_array(strtoupper($word), $uppercase_exceptions))
				{
					$word = strtoupper($word);
				}
				else
				{
					if (!in_array($word, $lowercase_exceptions))
					{
						$word = ucfirst($word);
					}
	 			}

				$newwords[] = $word;
			}

			if (in_array(strtolower($delimiter), $lowercase_exceptions))
			{
				$delimiter = strtolower($delimiter);
			}

			$string = join($delimiter, $newwords);
		}
		return $string;
	}

	public function create(Request $request)
	{
		$params = $request -> all();

		$this -> validate($request, [
			'name' 		=> 'required|min:2|max:63',
			'lastname' 	=> 'required|min:2|max:63',
			'email' 	=> 'required|email|max:127',
			'birthday' 	=> 'required|date',
		]);

		$people = new People();

		$people -> name 	= $this -> titleCase($params['name']);
		$people -> lastname = $this -> titleCase($params['lastname']);
		$people -> email 	= strtolower($params['email']);
		$people -> birthday = $params['birthday'];

		$people -> save();

		return redirect() -> route('people') -> with('success', 'A new people has been created !');
	}

	public function read($id)
	{
		$someone = People::find($id);

		if ($someone === NULL)
		{
			return view('utils/404');
		}

		$someone['birthday'] = new Carbon($someone['birthday']);

		return view('people/people_detail') -> with('someone', $someone);
	}

	public function readAll()
	{
		$people = People::all();

		// Convert all date strings to date objects
		foreach ($people as $someone)
		{
			$someone['birthday'] = new Carbon($someone['birthday']);
		}

		return view('people/people_list') -> with('people', $people);
	}

	public function update($id)
	{

	}

	public function delete($id)
	{

	}

	public function readAllJson(Request $request)
	{
		$collection = People::all();

		foreach ($collection as $someone)
		{
			$someone['birthday'] = new Carbon($someone['birthday']);
		}

		return response() -> json($collection) -> setCallback($request -> input('callback'));
	}
}