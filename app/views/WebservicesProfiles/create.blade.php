@extends('layouts.base')
@section('main')
<div class="container">
	<h1>Create a new profile for [[$webservice->name]]</h1>
	[[Form::open(array('url'=>URL::to('webservices/'.$webservice_id.'/profiles')))]]
	<div class="row">
		<div class="col-sm-4">
			<input type="text" class='form-control' name="name" id="name" placeholder='name'>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-4">
			<input type="text" class='form-control' name="description" id="description" placeholder='description'>
		</div>
	</div>
	<br>
	 <br>
 <br>

	<input type="submit">
	[[Form::close()]]
</div>
@stop