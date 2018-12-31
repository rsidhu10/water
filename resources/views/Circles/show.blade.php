@extends('topbar')
@section('mainContent')

	<div class="container" style="text-align: center;"><h3>District wise Status of </h3></div>
	<table class="table table-striped table-responsive table-bordered">
		<thead>
			<tr>
				<th rowspan="2">Sr.</th>
				<th rowspan="2">District</th>
				<th colspan="6" style="text-align: center;">Number of </th>
			</tr>
			<tr>
				<th>Divisions</th>
				<th>Sub Divisions</th>
				<th>Blocks</th>
				<th>Schemes</th>
				<th>Habitations</th>
			</tr>
		</thead>
		<tbody>
			
		@foreach($circle->districts as $district)
		
		<tr>
			<td>{{$district->id}}</td>
			<td><a href="/districts/{{$district->id}}">
				{{$district->district_name}}</a></td>
			<td>{{$district->id}}</td>
			<td>{{1}}</td>
			<td>{{2}}</td>
			<td>{{3}}</td>
			<td>{{4}}</td>
			
		</tr>
		@endforeach
		</tbody>
	</table>
	<hr>


@endsection