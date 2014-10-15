@extends("_child")

@section("title")

	Generate Random Users with Your BFF

@stop

@section("content")

	<br>

	<div class="directions">

		<h1 align="center">Generate Random Users</h1>

	</div>

@stop

@section("form")

	<div id="fillerform">

		{{ Form::open(array("url" => "randomusers", "method" => "GET")) }}

			{{ Form::label("count", "How many users would you like returned (1-1000)?"); }}
			<br>
			{{ Form::text("count", Input::get("count")); }}

			<br>
			<br>

			{{ Form::checkbox("birthday", "birthday", Input::get("birthday"), array("id"=>"birthday")); }}
			{{ Form::label("birthday", "Include Birthdays"); }}

			<br>

			{{ Form::checkbox("zip", "zip", Input::get("zip"), array("id"=>"zip")); }}
			{{ Form::label("zip", "Include Zip Codes"); }}

			<br>

			{{ Form::checkbox("profile", "profile", Input::get("profile"), array("id"=>"profile")); }}
			{{ Form::label("profile", "Include User Profiles"); }}

			<br>
			<br>

			{{ Form::submit("SUBMIT", array("class" => "btn btn-success btn-lg", "name" => "submit")); }}

			<br>
			<br>

		{{ Form::close() }}

	</div>

@stop


@section("output")

			<div id="outputarea">

				<p id="actualoutput">

					<?php require(app_path()."/php/randomuserslogic.php"); ?>

				</p>

			</div>

@stop