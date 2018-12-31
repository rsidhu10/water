@extends('topbar')
@section('mainContent')

	<div class="container" style="text-align: center;"><h3>District wise Status of </h3></div>
	<table class="table table-striped table-responsive table-bordered">
		<thead>
			<tr>
				<th rowspan="2">Sr.</th>
				<th rowspan="2">Sub Division</th>
				<th colspan="6" style="text-align: center;">Number of </th>
			</tr>
			<tr>
				<th>Blocks</th>
				<th>Schemes</th>
				<th>Habitations</th>
			</tr>
		</thead>
		<tbody>
			
		@foreach($division->subdivisions as $subdivision)
		
		<tr>
			<td>{{$subdivision->id}}</td>
			<td><a href="/subdivisions/{{$subdivision->id}}">
				{{$subdivision->subdivision_name}}</a></td>
			<td>{{$subdivision->id}}</td>
			<td>{{1}}</td>
			<td>{{2}}</td>
		</tr>
		@endforeach
		</tbody>
	</table>
	<hr>


@endsection