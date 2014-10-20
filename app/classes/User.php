<?php

class User {

	//get an array of names - the array will have as many values as are
	//requested via the $count variable
	public function getName($count) {

		//create a Faker object
		$faker = Faker::create();

		//create an array to be populated
		$usernames = array();

		//for the number of users requested, cycle through the for
		//loop and add a new name to the $usernames array by calling
		//the Faker 'name' method
		for ($i=0; $i<$count; $i++) {
			$usernames = array_add($usernames, $i, $faker -> name);
		}

		//return an array of names
		return $usernames;

	}

	//get an array of birthdays - the array will have as many values as are
	//requested via the $count variable
	public function getBirthday($count) {

		//create a Faker object
		$faker = Faker::create();

		//create an array to be populated
		$userbirthdays = array();

		//for the number of birthdays requested, cycle through the for
		//loop and add a new birthday to the $userbirthdays array by calling
		//the Faker 'dateTimeThisCentury' method
		for ($i=0; $i<$count; $i++) {
			$userbirthdays = array_add($userbirthdays, $i, $faker -> dateTimeThisCentury->format('Y-m-d'));
		}

		//return an array of birthdays
		return $userbirthdays;

	}

	//get an array of zip codes - the array will have as many values as are
	//requested via the $count variable
	public function getZip($count) {

		//create a Faker object
		$faker = Faker::create();

		//create an array to be populated
		$userzips = array();

		//for the number of zip codes requested, cycle through the for
		//loop and add a new zip code to the $userzips array by calling
		//the Faker 'postcode' method
		for ($i=0; $i<$count; $i++) {
			$userzips = array_add($userzips, $i, $faker -> postcode);
		}

		//return an array of zip codes
		return $userzips;

	}

	//get an array of profiles - the array will have as many values as are
	//requested via the $count variable
	public function getUserProfile($count) {

		//create a Faker object
		$faker = Faker::create();

		//create an array to be populated
		$userprofiles = array();

		//for the number of profiles requested, cycle through the for
		//loop and add a new "profile" to the $userprofiles array by calling
		//the Faker 'text' method
		for ($i=0; $i<$count; $i++) {
			$userprofiles = array_add($userprofiles, $i, $faker -> text ($maxNbChars = 200));
		}

		//return an array of profiles
		return $userprofiles;

	}

}