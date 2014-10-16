<?php
	
	//only perform the logic if the user has pressed the submit button
	if (Input::get("submit")) {

		//check the users inputs to make sure they are valid - if not, return warnings
		require(app_path()."/php/warningslogic.php");

		//if the user's requested number of paragraphs falls within the given parameters,
		//retrieve the user's request
		if (Input::get("count") > 0 && Input::get("count") <=1000) {

			//create a new instance of the LoremIpsum class
			$generator = new LoremIpsum();

			//if the user wants short paragraphs, set the variables of the 
			//getParagraphs method to reflect this preference
			if (Input::get("paraglength")=="short") {

				$generator -> setSentenceStDev(1);
				$generator -> setSentenceMean(6);
				$generator -> setParagraphStDev(1);
				$generator -> setParagraphMean(3);

			}

			//if the user wants medium-length paragraphs, set the variables of the 
			//getParagraphs method to reflect this preference
			elseif (Input::get("paraglength")=="medium") {

				$generator -> setSentenceStDev(1);
				$generator -> setSentenceMean(9);
				$generator -> setParagraphStDev(2);
				$generator -> setParagraphMean(7);

			}

			//if the user wants long paragraphs, set the variables of the 
			//getParagraphs method to reflect this preference
			elseif (Input::get("paraglength")=="long") {

				$generator -> setSentenceStDev(3);
				$generator -> setSentenceMean(12);
				$generator -> setParagraphStDev(5);
				$generator -> setParagraphMean(20);

			}

			//call the getParagraphs method, passing in the number of paragraphs
			//the user requested
			$paragraphs = $generator->getParagraphs(Input::get("count"));

			//output the paragraphs
			echo implode("<p id=\"actualoutput\">", $paragraphs);

		}
	}
	




