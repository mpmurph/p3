<?php

class FillerController extends BaseController {

	public function showFillerTextPage() {

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
	}

}
