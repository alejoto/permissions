@extends('layouts.base')
@section('main')
<div class="container">
	<h1>admin permissions version 1</h1>


Pending to add a login, only for joaleto and very selected users
<ul>
@foreach($links as $l)
	<li> [[$l]] </li>
@endforeach
</ul>

</div>	
@stop