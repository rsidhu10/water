@extends('topbar')
@section('mainContent')
	<div class="container" style="text-align: center;"><h3>District wise Status</h3></div>
	<table class="table table-striped table-responsive table-bordered">
		<thead>
			<tr>
				<th>Sr.</th>
				<th>District</th>
				<th>Divisions</th>
				<th>Sub Divisions</th>
				<th>Blocks</th>
				<th>Schemes</th>
				<th>Habitations</th>
			</tr>
		</thead>
		<tbody>
		<?php $num =1; ?>	
		@foreach($districts as $district)
		<tr>
			<td>{{$num}}</td>
			<td><a href="localhost/districts/{{$district->id}}">
				{{$district->district_pname}}</a></td>
			<td>{{$district->id}}</td>
			<td>{{1}}</td>
			<td>{{2}}</td>
			<td>{{3}}</td>
			<td>{{4}}</td>
			
		</tr>
		<?php $num++; ?>
		@endforeach
		</tbody>
	</table>
	<hr>


@endsection