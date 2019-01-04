@extends('topbar')
@section('mainContent')
	<div class="container" style="text-align: center;"><h3>Circle wise Status</h3></div>
	<table class="table table-striped table-responsive table-bordered">
		<thead>
			<tr>
				<th>Sr.</th>
				<th>Circles</th>
				<th>Districts</th>
				<th>Divisions</th>
				<th>Sub Divisions</th>
				<th>Blocks</th>
				<th>Schemes</th>
				<th>Habitations</th>
			</tr>
		</thead>
		<tbody>
		<?php $num =1; ?>	
		@foreach($circles as $circle)
		<tr>
			<td>{{$num}}</td>
			<td><a href="districts/{{$circle->id}}">
				{{$circle->circle_pname}}</a></td>
			<td>{{$circle->id}}</td>
			<td>{{$num}}</td>
			<td>{{2}}</td>
			<td>{{3}}</td>
			<td>{{4}}</td>
			<td>{{5}}</td>
		</tr>
		<?php $num++; ?>
		@endforeach
		</tbody>
	</table>
	<hr>


@endsection