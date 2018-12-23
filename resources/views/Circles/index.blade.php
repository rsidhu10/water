@extends('topbar')



@section('mainContent')
	<h1>List Car</h1>

	<table class="table table-striped">
		<thead>
			<tr>
				<th>ID</th>
				<th>Zone ID</th>
				<th>Name</th>
				<th>Punjabi Name</th>
				<th>User Code</th>

			</tr>
		</thead>
		<tbody>
		@foreach($circles as $circle)
		<tr>
			<td>{{$circle->id}}</td>
			<td>{{$circle->zone_id}}</td>
			<td><a href="circles/{{$circle->id}}">{{$circle->circle_name}}</a> </td>
			<td>{{$circle->circle_pname}}</td>
			<td>{{$circle->user_level}}</td>
		</tr>
		@endforeach
		</tbody>
	</table>
	<hr>
	<a href="zones/create">Add New Car</a>
	<div class="container">
		<div class="table-responsive" id="Combo_details">
		   	<table class="table table-striped">
				<tr>
					<th>Circle</th>
				</tr>
				<tr>
					<td>
						
						<select name="circle_cbo" id="circle_cbo" required class="form-control input-sm" autofocus="autofocus">
							<option value="">Select Circle</option>
							@foreach($circles as $circle)
							<option value={{$circle->user_level}}>{{$circle->circle_pname}}</option>
							@endforeach
					    </select>
					</td>
				</tr>
			</table>
		</div>
	</div>

@endsection