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

		<form action="fillertext" method="GET">

			<label for="count">How many paragraphs would you like returned?</label>
			<input type="text" id="count" name="count" <?php if (array_key_exists ("count", $_GET)) { echo "value=\"$_GET[count]\"";}?> />

			<br>
			<br>
			
			<input type="radio" name="paraglength" value="short" 
			<?php if (array_key_exists ("paraglength", $_GET) && $_GET["paraglength"]=="short") { echo "checked";}?> />
			<label for="short">Short</label> 

			<br>

			<input type="radio" name="paraglength" value="medium" 
			<?php if (array_key_exists ("paraglength", $_GET) && $_GET["paraglength"]=="medium") { echo "checked";}?> />
			<label for="medium">Medium</label> 

			<br>

			<input type="radio" name="paraglength" value="long" 
			<?php if (array_key_exists ("paraglength", $_GET) && $_GET["paraglength"]=="long") { echo "checked";}?> />
			<label for="long">Long</label> 

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