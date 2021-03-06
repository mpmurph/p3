@extends("_child")

@section("title")

	Generate Random Users with Your BFF

@stop

@section("content")

	<br>

	<div class="directions">

		<h1 style="text-align:center">Generate Random Users</h1>

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
			{{ Form::label("profile", "Include Lorem Ipsum User Profile"); }}

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

		<div id="actualoutput">

			@if(isset($warnings))

				<p id="warning">{{ $warnings }}</p>

			@endif

			@if(isset($names))

				@for($i=0; $i<$count; $i++)

					<span style="color:#494047">Name: </span>{{ $names[$i] }}

					<br>

						@if(isset($birthdays))

							<span style="color:#494047">Birthday: </span>{{ $birthdays[$i] }}
							<br>

						@endif
						
						@if(isset($zips))

							<span style="color:#494047">Zip Code: </span>{{ $zips[$i] }}
							<br>

						@endif


						@if(isset($profiles))

							<span style="color:#494047">Profile: </span>{{ $profiles[$i] }}
							<br>

						@endif

					<br>
				
				@endfor

			@endif

		</div>

	</div>

	<br>

	<h5 style="text-align:center">{{ link_to("/", "Return Home")." or ".link_to("/fillertext", "Generate Filler Text") }}</h5>

@stop