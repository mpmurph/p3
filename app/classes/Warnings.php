<?php

class Warnings {
	
	public function errorCheckUserEntry($count) {

		//make sure that the user has entered a number in the text field.
		//if not, return a warning
		if (preg_match ("/[\D]+/", $count)) {

			return "PLEASE ENTER A NUMBER!";

		}

		//make sure that the user has entered a number less than 1000 in 
		//the text field. if not, return a warning
		elseif ($count > 1000) {

			return "PLEASE ENTER A SMALLER NUMBER!";

		}

		//make sure that the user has entered a number greater than 0 in 
		//the text field. if not, return a warning
		elseif ($count <= 0) {

			return "PLEASE ENTER A NUMBER <br>GREATER THAN ZERO!";

		}

	}

}