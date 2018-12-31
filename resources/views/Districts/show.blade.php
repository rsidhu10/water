@extends('topbar')
@section('mainContent')

	<div class="container" style="text-align: center;"><h3>District wise Status of </h3></div>
	<table class="table table-striped table-responsive table-bordered">
		<thead>
			<tr>
				<th rowspan="2">Sr.</th>
				<th rowspan="2">Division</th>
				<th colspan="6" style="text-align: center;">Number of </th>
			</tr>
			<tr>
				<th>Sub Divisions</th>
				<th>Blocks</th>
				<th>Schemes</th>
				<th>Habitations</th>
			</tr>
		</thead>
		<tbody>
			
		@foreach($district->divisions as $division)
		
		<tr>
			<td>{{$division->id}}</td>
			<td><a href="/divisions/{{$division->id}}">
				{{$division->division_name}}</a></td>
			<td>{{$division->id}}</td>
			<td>{{1}}</td>
			<td>{{2}}</td>
			<td>{{3}}</td>
			
			
		</tr>
		@endforeach
		</tbody>
	</table>
	<hr>


@endsection