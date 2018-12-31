@extends('topbar')
@section('mainContent')

	<div class="container" style="text-align: center;"><h3>Circle wise Status</h3></div>
	<table class="table table-striped table-responsive table-bordered">
		<thead>
			<tr>
				<th rowspan="2">Sr.</th>
				<th rowspan="2">Circle</th>
				<th colspan="6" style="text-align: center;">Number of </th>
			</tr>
			<tr>
				<th>Districts</th>
				<th>Divisions</th>
				<th>Sub Divisions</th>
				<th>Blocks</th>
				<th>Schemes</th>
				<th>Habitations</th>
			</tr>
		</thead>
		<tbody>
			
		@foreach($zone->circles as $circle)
		
		<tr>
			<td>{{$circle->id}}</td>
			<td><a href="/circles/{{$circle->id}}">
				{{$circle->circle_name}}</a></td>
			<td>{{$circle->id}}</td>
			<td>{{1}}</td>
			<td>{{2}}</td>
			<td>{{3}}</td>
			<td>{{4}}</td>
			<td>{{5}}</td>
		</tr>
		@endforeach
		</tbody>
	</table>
	<hr>


@endsection