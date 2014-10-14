@extends("_child")

@section("title")

	Generate Filler Text with Your BFF

@stop

@section("content")

	<br>

	<div class="directions">

		<h1 align="center">Generate Filler Text</h1>

	</div>

@stop

@section("form")

	<div id="fillerform">

		{{ Form::open(array("url" => "fillertext", "method" => "GET")) }}

			{{ Form::label("count", "How many paragraphs would you like returned?"); }}
			{{ Form::text("count", Input::get("count")); }}

			<br>
			<br>
			
			{{ Form::radio("paraglength", "short", Input::get("paraglength")=="short"); }}
			{{ Form::label("short", "Short"); }}

			<br>

			{{ Form::radio("paraglength", "medium", Input::get("paraglength")=="medium"); }}
			{{ Form::label("medium", "Medium"); }}

			<br>

			{{ Form::radio("paraglength", "long", Input::get("paraglength")=="long"); }}
			{{ Form::label("long", "Long"); }}

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