@extends('layouts.base')
@section('main')
<div class="container">
	<h1>
	Index for all users
	</h1>
	[[User::find(4)->userinfo]]
	<table class='table table-condensed'>
		<tr>
			<th>
				Name
			</th>
			@foreach($header as $h)
				<th>
					[[ $h[0] ]]
				</th>
			@endforeach
			<th>reset request</th>
		</tr>
	@foreach($users as $u)
		<tr>
			<td>
				@if($u->userinfo!='')
				<a href="[[$profile.'/'.$u->id]]">
				[[$u->userinfo->name]]
				[[$u->userinfo->surname]]
				</a>
				@else 
				No name has been set yet
				<a href="[[$profile.'/'.$u->id]]">(see profile)</a>
				@endif
			</td>
			@foreach($header as $h)
				<td>[[ $u->$h[0] ]]</td>
			@endforeach
			<td>
				@if($u->resetkey!='')
				yes
				@endif
			</td>
			
		</tr>
	@endforeach
	</table>
</div>	
@stop