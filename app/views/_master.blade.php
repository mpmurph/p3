<!DOCTYPE html>

<html lang="en">

<head>
	<title>@yield('title', "A Developer's BFF - Generate Random Text and Users")</title>
	<meta charset="UTF-8">
	<meta name="description" content="this site generates random content and/or random user profiles">
	<meta name="keywords" content="lorem ipsum, random, text, generator, user, users, profile, profiles, pretend, copy">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
	<?php //require("logic.php"); ?>
</head>

<body>

	<div id="wrapper">

		@yield("header")

		@yield("content")

		@yield("form")

		@yield("footer")

		<div class="clearboth">
		</div>

		@yield("output")

	</div>

</body>

</html>