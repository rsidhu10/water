@extends('layout')

@section('mainContent')
	<h1>Show Zone</h1>
	<div>
		<h1>{{$zone->id}}</h1>
	</div>
	<p>
		<strong>{{$zone->zone_name}}</strong>
	</p>
	<p>
		<strong>{{$zone->zone_pname}}</strong>
	</p>
	<a href="{{$zone->id}}/edit">Edit Data</a>
@endsection