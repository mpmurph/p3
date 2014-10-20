<?php

class FillerController extends BaseController {

	public function showFillerTextPage() {

		//render page with an empty form if no data has been submitted
		if (!Input::get("submit")) {

			return View::make("fillertext");

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

			return View::make("fillertext")
				->with("warnings", $warnings);

		}

		//create a new instance of the Filler class
		$filler = new Filler();

		//call the Filler method to generate the number of paragraphs 
		//requested by the user with the word list the user selected
		$paragraphs = $filler->makeParagraphs(Input::get("paraglength"), Input::get("count"), Input::get("wordlist"));

		//call for the fillertext view, inserting the results of the 
		//user's request returned by the Filler method
		return View::make("fillertext")
			->with("paragraphs", $paragraphs);
	}

}
