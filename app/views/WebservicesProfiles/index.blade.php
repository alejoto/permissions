@extends('layouts.base')
@section('main')
<div class="container">
<h1>Profiles for [[$webservice->name]]</h1>
<a href="[[URL::to('webservices/'.$webservice_id.'/profiles/create')]]">add a new web service profile</a>


<table class="table table-condensed">
	<tr>
		<th>Name</th>
		<th>Description</th>
	</tr>
	@foreach($webservice->profile as $p)
	<tr>
		<td>[[$p->name]]</td>
		<td>[[$p->description]]</td>
	</tr>
	@endforeach
</table>
</div>
@stop