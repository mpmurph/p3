<?php

class UserController extends BaseController {

	public function showRandomUsersPage() {

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

	}

}
