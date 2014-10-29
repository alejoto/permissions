@extends('layouts.base')
@section('main')
<div class="container">
	<a href="[[URL::to('webservices/create')]]">
		Create a new web service
	</a>
	<hr>
	<table class="table table-condensed">
		<tr>
			<th>Name</th>
			<th>URL</th>
			<th>Description</th>
		</tr>
		@foreach($webservices as $w)
			<tr>
				<td>
					<a href="[[URL::to('webservices/'.$w->id)]]">[[$w->name]]</a>
					<ul>
						<li>
							<a href="[[URL::to('webservices/'.$w->id.'/profiles')]]">Profiles</a>
						</li>
					</ul>
				</td>
				<td>[[$w->url]]</td>
				<td>[[$w->description]]</td>
			</tr>
		@endforeach
	</table>
	@foreach($webservices as $w)
		[[$w->name]]
		<spam class="text-muted">[[$w->url]]</spam>
		<br>
	@endforeach
	<hr>
	pending to nest roles for each site.  Example
	taskingeasy 
	free
	<br>
	basic
	<br>
	premium
	<br>

	and so on



</div>	
@stop