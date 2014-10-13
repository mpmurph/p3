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

		<header>
			<img src="images/bffstickman.jpg" alt="A BFF Stickman" id="sidebarimage"/>
			<img src="images/bffheader.jpg" alt="A Developer's BFF" id="headerimage"/>
		</header>

		@yield("content")

		@yield("form")

	</div>

</body>

</html>