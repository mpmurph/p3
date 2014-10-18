<?php

class Filler {

	public function makeParagraphs($length, $count, $wordlist) {

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

		//if the user wants to use the BFF wordlist, definte that list
		//and set it as the word list (the default is lorem ipsum)
		//per the LoremIpsum class
		if ($wordlist =="bff") {

			$bffwords = array (
		        "man's best friend",  "friends",        "friendly",         "like",               "love",              "smile",
				"smiling",            "smiles",      	"hug",               "hugs",              "right on",          "memories",
				"friendship",         "lean on me",     "bff",               "support",           "listens",           "care",
				"there for you",      "buddy",          "buddies",           "affection",         "solidarity",        "understands",
				"understanding",      "respect",        "advice",            "wisdom",            "fun",               "affinity",
				"devotion",           "loyalty",        "trust",             "familiarity",       "comfortable with",  "share",
				"sharing",            "shared",         "the",               "and",               "a",                 "also",
				"too",                "me and you",     "us",                "together",          "in sync",           "team",
				"hears you",          "amigo",          "amiga",             "we can",            "two",               "freund",
				"pal",                "trust",          "trustworthy",       "loyal",             "steadfast",         "devoted",
				"chum",               "mate",           "comrade",           "boon companion",    "mate",              "confidante",
				"true",               "unfailing",      "unswerving",        "unwavering",        "on your side",      "constant",
				"staunch",            "honest",         "always there",      "faithful",          "rocklike",          "forgiving",
				"generous",           "thoughtful",     "supportive",        "we",                "same mind",         "likeminded",
				"bestie",             "best friend",    "best friends",      "thick as thieves",  "wingman",           "amico",
				"boo",                "best buds",      "second self",       "alter ego",         "confidant",         "kindred spirit",
				"amica",              "ally",           "kindred",           "appreciative",      "accommodating",     "compassionate",
				"caring",             "cares",          "candid",            "discrete",          "encourage",         "encouraging",
				"fantastic",          "amazing",        "the best",          "fair",              "funny",             "humorous",
				"sense of humor",     "inclusive",      "remembers",         "calls back",        "checks in",         "joy",
				"laugh",              "laughter",       "laughing",          "nice",              "great",             "super",
				"perceptive",         "remarkable",     "respectful",        "matters",           "trusting",          "trusty",
				"bffs",               "unconditional",  "understand",        "warm",              "welcoming",         "welfare",
				"warmth",             "champ",          "genuine",           "sincere",           "straight talker",   "instantaneous",
				"mind reader",        "beaming",        "giggles",           "laughs",            "good times",        "fun times",
				"terrific",           "tops",           "valued",            "vital",             "necessary",         "childhood",
				"longtime",           "cool",           "amazeballs",        "marvelous",         "wonderful",         "smart",
				"wise",               "advice",         "partner in crime",  "keen",              "instinctive",       "intuition",
				"same page",          "agree",          "gossip",            "movie night",       "bridesmaid",        "groomsman",
				"brave",              "helps",          "helper",            "lend a hand",       "helping",           "supporting",
				"is",                 "really",        "totally"
			);

			$generator -> setWords($bffwords);

		}

		//call the getParagraphs method from the LoremIpsum class, passing 
		//in the number of paragraphs the user requested
		$paragraphs = $generator->getParagraphs($count);

		//return an array of paragraphs
		return $paragraphs;

	}

}