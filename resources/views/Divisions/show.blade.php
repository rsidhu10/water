@extends('topbar')
@section('mainContent')

	<div class="container" style="text-align: center;"><h3>District wise Status of </h3></div>
	<table class="table table-striped table-responsive table-bordered">
		<thead>
			<tr>
				<th>Sr.</th>
				<th>Sub Division</th>
				<th>Blocks</th>
				<th>Schemes</th>
				<th>Habitations</th>
			</tr>
		</thead>
		<tbody>
		<?php $num =1; ?>	
		@foreach($division->subdivisions as $subdivision)
		
		<tr>
			<td>{{$num}}</td>
			<td><a href="/subdivisions/{{$subdivision->id}}">
				{{$subdivision->subdivision_name}}</a></td>
			<td>{{$subdivision->id}}</td>
			<td>{{1}}</td>
			<td>{{2}}</td>
		</tr>
		<?php $num++; ?>
		@endforeach
		</tbody>
	</table>
	<hr>


@endsection