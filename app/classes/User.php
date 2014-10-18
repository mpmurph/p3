<?php

class User {


	public function getName($count) {

		$faker = Faker::create();
		$usernames = array();

		for ($i=0; $i<$count; $i++) {
			$usernames = array_add($usernames, $i, $faker -> name);
		}

		return $usernames;

	}

	public function getBirthday($count) {

		$faker = Faker::create();
		$userbirthdays = array();

		for ($i=0; $i<$count; $i++) {
			$userbirthdays = array_add($userbirthdays, $i, $faker -> dateTimeThisCentury->format('Y-m-d'));
		}

		return $userbirthdays;

	}

	public function getZip($count) {

		$faker = Faker::create();
		$userzips = array();

		for ($i=0; $i<$count; $i++) {
			$userzips = array_add($userzips, $i, $faker -> postcode);
		}

		return $userzips;

	}

	public function getUserProfile($count) {

		$faker = Faker::create();
		$userprofiles = array();

		for ($i=0; $i<$count; $i++) {
			$userprofiles = array_add($userprofiles, $i, $faker -> text ($maxNbChars = 200));
		}

		return $userprofiles;

	}

}