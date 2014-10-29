@extends('layouts.base')
@section('main')
<div class="container">
	<h1>Add a new web service</h1>
	[[Form::open(array('url'=>URL::to('webservices')) )]]
	<div class="row">
		<div class="col-sm-3">
			<input type="text" class='form-control' name="name" id="name" placeholder='name'>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-3">
			<input type="text" class='form-control' name="url" id="url" placeholder='url'>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-3">
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