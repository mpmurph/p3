@extends("_child")

@section("title")

	Generate Filler Text with Your BFF

@stop

@section("content")

	<br>

	<div class="directions">

		<h1>Generate Filler Text</h1>

	</div>

@stop

@section("form")

	<div id="fillerform">

		{{ Form::open(array("url" => "fillertext", "method" => "GET")) }}

			{{ Form::label("count", "How many paragraphs would you like returned (1-1000)?"); }}
			<br>
			{{ Form::text("count", Input::get("count")); }}

			<br>
			<br>
			
			{{ Form::radio("paraglength", "short", Input::get("paraglength")=="short", array("id"=>"short")); }}
			{{ Form::label("short", "Short"); }}

			<br>

			{{ Form::radio("paraglength", "medium", Input::get("paraglength")=="medium", array("id"=>"medium")); }}
			{{ Form::label("medium", "Medium"); }} 

			<br>

			{{ Form::radio("paraglength", "long", Input::get("paraglength")=="long", array("id"=>"long")); }}
			{{ Form::label("long", "Long"); }}

			<br>
			<br>

			{{ Form::label("loremipsum", "Which word list would you like to use?") }}
			<br>
			{{ Form::radio("wordlist", "loremipsum", Input::get("wordlist")=="loremipsum", array("id"=>"loremipsum")); }}
			{{ Form::label("loremipsum", "Lorem Ipsum"); }}
			<br>
			{{ Form::radio("wordlist", "bff", Input::get("wordlist")=="bff", array("id"=>"bff")); }}
			{{ Form::label("bff", "BFF Words"); }}

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

				@if(isset($warnings))
					<p id="warning">{{ $warnings }}</p>
				@endif

				@if(isset($paragraphs))
					@foreach($paragraphs as $paragraph)
						<p id="actualoutput">{{ $paragraph }}</P>
					@endforeach
				@endif

			</div>

@stop