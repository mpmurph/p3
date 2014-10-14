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

			{{ Form::label("count", "How many users would you like returned?"); }}
			{{ Form::text("count", Input::get("count")); }}

			<br>
			<br>

			{{ Form::checkbox("birthday", "birthday", Input::get("birthday")); }}
			{{ Form::label("birthday", "Include Birthdays"); }}

			<br>

			{{ Form::checkbox("zip", "zip", Input::get("zip")); }}
			{{ Form::label("zip", "Include Zip Codes"); }}

			<br>

			{{ Form::checkbox("profile", "profile", Input::get("profile")); }}
			{{ Form::label("profile", "Include User Profiles"); }}

			<br>
			<br>

			{{ Form::submit("SUBMIT", array("class" => "btn btn-success btn-lg")); }}

			<br>
			<br>

		{{ Form::close() }}

	</div>

@stop


@section("output")

			<div id="outputarea">
				<p id="actualoutput"> TEST OUTPUT </p>
			</div>

@stop