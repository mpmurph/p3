<?php

class Filler {

	public function makeParagraphs($length, $count) {

		//create a new instance of the LoremIpsum class
		$generator = new LoremIpsum();

		//if the user wants short paragraphs, set the variables of the 
		//getParagraphs method to reflect this preference
		if ($length=="short") {

			$generator -> setSentenceStDev(1);
			$generator -> setSentenceMean(6);
			$generator -> setParagraphStDev(1);
			$generator -> setParagraphMean(3);

		}

		//if the user wants medium-length paragraphs, set the variables of the 
		//getParagraphs method to reflect this preference
		elseif ($length=="medium") {

			$generator -> setSentenceStDev(1);
			$generator -> setSentenceMean(9);
			$generator -> setParagraphStDev(2);
			$generator -> setParagraphMean(7);

		}

		//if the user wants long paragraphs, set the variables of the 
		//getParagraphs method to reflect this preference
		elseif ($length=="long") {

			$generator -> setSentenceStDev(3);
			$generator -> setSentenceMean(12);
			$generator -> setParagraphStDev(5);
			$generator -> setParagraphMean(20);

		}

		//call the getParagraphs method from the LoremIpsum class, passing 
		//in the number of paragraphs the user requested
		$paragraphs = $generator->getParagraphs($count);

		//return an array of paragraphs
		return $paragraphs;

	}

}