<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make("welcome");
});


Route::get('/fillertext', function()
{

	//render blank page if no data has been submitted
	if (!Input::get("submit")) {

		return View::make("fillertext");

	}

	$warningcheck = new Warnings();

	$warnings = $warningcheck->errorCheckUserEntry(Input::get("count"));

	if ($warnings) {

		return View::make("fillertext")
			->with("warnings", $warnings);

	}

	$filler = new Filler();

	$paragraphs = $filler->makeParagraphs(Input::get("paraglength"), Input::get("count"), Input::get("wordlist"));

	return View::make("fillertext")
		->with("paragraphs", $paragraphs);

});


Route::get('/randomusers', function()
{
	
	//render blank page if no data has been submitted
	if (!Input::get("submit")) {

		return View::make("randomusers");

	}

	$warningcheck = new Warnings();

	$warnings = $warningcheck->errorCheckUserEntry(Input::get("count"));

	if ($warnings) {

		return View::make("randomusers")->with("warnings", $warnings);

	}

	$user = new User();
	$count = Input::get("count");

	$usernames = $user->getName(Input::get("count"));


		if(Input::get("birthday")) {

			$userbirthdays = $user->getBirthday(Input::get("count"));

		}

		if(!Input::get("birthday")) {

			$userbirthdays = NULL;

		}

		if(Input::get("zip")) {

			$userzips = $user->getZip(Input::get("count"));

		}

		if(!Input::get("zip")) {

			$userzips = NULL;

		}

		if(Input::get("profile")) {

			$userprofiles = $user->getUserProfile(Input::get("count"));

		}

		if(!Input::get("profile")) {

			$userprofiles = NULL;

		}

	return View::make("randomusers")
		->with("count", $count)
		->with("names", $usernames)
		->with("birthdays", $userbirthdays)
		->with("zips", $userzips)
		->with("profiles", $userprofiles);

});
