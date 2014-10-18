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

			{{ Form::checkbox("birthday", "birthday", Input::get("birthday")); }}
			{{ Form::label("birthday", "Include Birthdays"); }}

			<br>

			{{ Form::checkbox("zip", "zip", Input::get("zip")); }}
			{{ Form::label("zip", "Include Zip Codes"); }}

			<br>

			{{ Form::checkbox("profile", "profile", Input::get("profile")); }}
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

				<p id="actualoutput">

					@if(isset($warnings))

						<p id="warning">{{ $warnings }}</p>

					@endif

					@if(isset($names))

						@for($i=0; $i<$count; $i++)

							<span id="userdatalabel">Name: </span>{{ $names[$i] }}

							<br>

								@if(isset($birthdays))

									<span id="userdatalabel">Birthday: </span>{{ $birthdays[$i] }}
									<br>

								@endif
								
								@if(isset($zips))

									<span id="userdatalabel">Zip Code: </span>{{ $zips[$i] }}
									<br>

								@endif


								@if(isset($profiles))

									<span id="userdatalabel">Profile: </span>{{ $profiles[$i] }}
									<br>

								@endif

							<br>
						
						@endfor

					@endif

				</p>

			</div>

@stop