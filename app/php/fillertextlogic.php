<?php
	
	if (Input::get("submit")) {

		if (!preg_match ("/[\d]+/", Input::get("count"))) {

			echo "<p id=\"warning\">PLEASE ENTER A NUMBER!</p";

		}

		else if (Input::get("count") == "" && Input::get("paraglength")) {

			echo "<p id=\"warning\">PLEASE ENTER A NUMBER!</p";

		}

		else {
			$generator = new LoremIpsum();

			if (Input::get("paraglength")=="short") {

				$generator -> setSentenceStDev(1);
				$generator -> setSentenceMean(6);
				$generator -> setParagraphStDev(1);
				$generator -> setParagraphMean(3);

			}

			elseif (Input::get("paraglength")=="medium") {

				$generator -> setSentenceStDev(1);
				$generator -> setSentenceMean(9);
				$generator -> setParagraphStDev(2);
				$generator -> setParagraphMean(7);

			}

			elseif (Input::get("paraglength")=="long") {

				$generator -> setSentenceStDev(3);
				$generator -> setSentenceMean(12);
				$generator -> setParagraphStDev(5);
				$generator -> setParagraphMean(20);

			}

			$paragraphs = $generator->getParagraphs(Input::get("count"));
			echo implode("<p id=\"actualoutput\">", $paragraphs);

		}
	}
	




