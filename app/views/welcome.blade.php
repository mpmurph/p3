@extends("_master")

@section("content")

	<br/>

	<div id="welcome">
	<p id="welcometext">Welcome! This site aims to help developers by generating random content and/or 
	random users. Either or both of these resources are commonly used when testing websites. 
	Please choose what you would like to do:</p> 
	</div>

	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>

@stop

@section("form")

	<table>
		<tr>
			<td>Generate text filler:</td>
			<td>Generate random users:</td>
		</tr>

		<tr>
			<td>{{ link_to("fillertext", "Filler Text", array("class" => "btn btn-success custombutton")) }}</td>
			<td>{{ link_to("randomusers", "Random Users", array("class" => "btn btn-success custombutton")) }}</td>
	</table>

@stop