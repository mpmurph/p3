<?php

	if (!preg_match ("/[\d]+/", Input::get("count"))) {

		echo "<p id=\"warning\">PLEASE ENTER A NUMBER!</p";

	}

	elseif (Input::get("count") > 1000) {

		echo "<p id=\"warning\">PLEASE ENTER A SMALLER NUMBER!</p";

	}

	elseif (Input::get("count") <= 0) {

		echo "<p id=\"warning\">PLEASE ENTER A NUMBER <br>GREATER THAN ZERO!</p";

	}

	elseif (Input::get("count") == "" && Input::get("paraglength")) {

		echo "<p id=\"warning\">PLEASE ENTER A NUMBER!</p";

	}