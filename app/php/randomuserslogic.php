<?php

	if (Input::get("submit")) {

		require(app_path()."/php/warningslogic.php");

		if (Input::get("count") > 0 && Input::get("count") <=1000) {

			$faker = Faker::create();

			for ($i=1; $i<=Input::get("count"); $i++) {

				echo "Name: ".$faker -> name, "<br>";

				if (Input::get("birthday")) {

					echo "Birthday: ".$faker->dateTimeThisCentury->format('Y-m-d'), "<br>";

				}

				if (Input::get("zip")) {

					echo "Zip Code: ".$faker -> postcode, "<br>";

				}

				if (Input::get("profile")) {

					echo "Profile: ".$faker -> text ($maxNbChars = 200), "<br>";

				}

				echo "<br>";
				echo "<br>";

			}

		}

	}