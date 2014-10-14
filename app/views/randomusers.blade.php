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

		<form action="randomusers" method="GET">

			<label for="count">How many users would you like returned?</label>
			<input type="text" id="count" name="count" <?php if (array_key_exists ("count", $_GET)) { echo "value=\"$_GET[count]\"";}?> />

			<br>
			<br>
			
			<input type="checkbox" name="birthday" value="birthday" 
			<?php if (array_key_exists ("birthday", $_GET)) { echo "checked";}?> />
			<label for="birthday">Include Birthdays</label> 

			<br>

			<input type="checkbox" name="zip" value="zip" 
			<?php if (array_key_exists ("zip", $_GET)) { echo "checked";}?> />
			<label for="zip">Include Zip Codes</label> 

			<br>

			<input type="checkbox" name="profile" value="profile" 
			<?php if (array_key_exists ("profile", $_GET)) { echo "checked";}?> />
			<label for="profile">Include User Profiles</label> 

			<br>
			<br>

			<input type="submit" class="btn btn-success btn-lg" name="submit" value="SUBMIT"/>

			<br>
			<br>

		</form>

	</div>

@stop


@section("output")

			<div id="outputarea">
				<p id="actualoutput"> TEST OUTPUT </p>
			</div>

@stop