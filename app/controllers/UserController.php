<?php

class UserController extends BaseController {

	public function showRandomUsersPage() {

		//render page with an empty form if no data has been submitted
		if (!Input::get("submit")) {

			return View::make("randomusers");

		}

		//create a new instance of the Warnings class
		$warningcheck = new Warnings();

		//call the Warnings function that checks to make sure the
		//user has entered a number equal to or between 1-1000 in 
		//the form text box
		$warnings = $warningcheck->errorCheckUserEntry(Input::get("count"));

		//if the user has entered something invalid (text, a negative number, etc)
		//then return the view with a warning message
		if ($warnings) {

			return View::make("randomusers")->with("warnings", $warnings);

		}

		//create a new instance of the User class
		$user = new User();

		//$count is the number of random users that the site user has requested
		$count = Input::get("count");

		//create an array of random user names
		$usernames = $user->getName(Input::get("count"));

			//if the site user has requested birthdays, create an array of birthdays
			if(Input::get("birthday")) {

				$userbirthdays = $user->getBirthday(Input::get("count"));

			}

			//if the site user did not request birthdays, set the variable with a null value
			if(!Input::get("birthday")) {

				$userbirthdays = NULL;

			}

			//if the site user has requested zip codes, create an array of zip codes
			if(Input::get("zip")) {

				$userzips = $user->getZip(Input::get("count"));

			}

			//if the site user did not request zip codes, set the variable with a null value
			if(!Input::get("zip")) {

				$userzips = NULL;

			}

			//if the site user has requested profiles, create an array of profiles
			if(Input::get("profile")) {

				$userprofiles = $user->getUserProfile(Input::get("count"));

			}

			//if the site user did not request profiles, set the variable with a null value
			if(!Input::get("profile")) {

				$userprofiles = NULL;

			}

		//call for the randomusers view, inserting the results returned per the 
		//site user's preferences
		return View::make("randomusers")
			->with("count", $count)
			->with("names", $usernames)
			->with("birthdays", $userbirthdays)
			->with("zips", $userzips)
			->with("profiles", $userprofiles);

	}

}
