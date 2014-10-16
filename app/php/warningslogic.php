<?php

	//make sure that the user has entered a number in the text field.
	//if not, return a warning to the output field
	if (!preg_match ("/[\d]+/", Input::get("count"))) {

		echo "<p id=\"warning\">PLEASE ENTER A NUMBER!</p";

	}

	//make sure that the user has entered a number less than 1000 in 
	//the text field. if not, return a warning to the output field
	elseif (Input::get("count") > 1000) {

		echo "<p id=\"warning\">PLEASE ENTER A SMALLER NUMBER!</p";

	}

	//make sure that the user has entered a number greater than 0 in 
	//the text field. if not, return a warning to the output field
	elseif (Input::get("count") <= 0) {

		echo "<p id=\"warning\">PLEASE ENTER A NUMBER <br>GREATER THAN ZERO!</p";

	}