@extends('layouts.base')
@section('main')
<div class="container">
	<h1>
	data for suscribed user
	[[$user->id]]
	</h1>
	Active resetkey?
	@if($user->resetkey!='')
	yes
	@endif
	<br>
	last update [[$user->updated_at]]

	@if($user->userinfo!='')
	user info here
	[[$user->userinfo->name]]
	@else
	NO USER INFO, JUST EMAIL AND PASSWORD
	@endif
	pending to add permissions 
	to which sites?
	which profile? free? $premium? superuser?
</div>	
@stop