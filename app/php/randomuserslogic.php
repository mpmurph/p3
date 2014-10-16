<?php

	//only perform the logic if the user has pressed the submit button
	if (Input::get("submit")) {

		//check the users inputs to make sure they are valid - if not, return warnings
		require(app_path()."/php/warningslogic.php");

		//if the user's requested number of users falls within the given parameters,
		//retrieve the user's request
		if (Input::get("count") > 0 && Input::get("count") <=1000) {

			//create a new instance of the Faker class
			$faker = Faker::create();

			//cycle through a process to generate - do this the same number of times
			//as the number of users that has been requested
			for ($i=1; $i<=Input::get("count"); $i++) {

				//generate a user name
				echo "Name: ".$faker -> name, "<br>";

				//if the user has requested to include birthdays, generate a birthdate
				if (Input::get("birthday")) {

					echo "Birthday: ".$faker->dateTimeThisCentury->format('Y-m-d'), "<br>";

				}

				//if the user has requested to include a zip code, generate a zip code
				if (Input::get("zip")) {

					echo "Zip Code: ".$faker -> postcode, "<br>";

				}

				//if the user has requested to include a profile, generate a lorem ipsum profile
				if (Input::get("profile")) {

					echo "Profile: ".$faker -> text ($maxNbChars = 200), "<br>";

				}

				//create some spacing between each user that is generated
				echo "<br>";
				echo "<br>";

			}

		}

	}