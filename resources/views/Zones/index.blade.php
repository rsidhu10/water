@extends('topbar')



@section('mainContent')
	<h1>List Car</h1>

	<table class="table table-striped">
		<thead>
			<tr>
				<th>ID</th>
				<th>Zone</th>
				<th>ਜ਼ੋਨ</th>
				<th>ਕੋਡ</th>
			</tr>
		</thead>
		<tbody>
		@foreach($zones as $zone)
		<tr>
			<td>{{$zone->id}}</td>
			<td><a href="zones/{{$zone->user_level}}">{{$zone->zone_name}}</a> </td>
			<td>{{$zone->zone_pname}}</td>
			<td>{{$zone->id}}</td>
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
					<th>Zone</th>
					<th>Circle</th>
					<th>District</th>
					<th>Blocks</th>
					<th>Scheme</th>
					<th>Habitation</th>
				</tr>
				<tr>
					<!-- <td>
						<select name="zone-cbo" id="zone-cbo" class="form-control input-sm" autofocus="autofocus" required>
							<option value="">Select Zone</option>
							@foreach($zones as $zone)
							<option value={{$zone->name}}>{{$zone->zone_pname}}</option>
							@endforeach
					    </select>
					</td>
					<td>
						<select name="zone-cbo" id="zone-cbo" class="form-control input-sm" autofocus="autofocus" required>
							<option value="">Select Zone</option>
							@foreach($zones as $zone)
							<option value= 
							{{$zone->name}}>{{$zone->zone_pname}}</option>
							@endforeach
					    </select>
					</td>
					<td>
						<select name="zone-cbo" id="zone-cbo" class="form-control input-sm" autofocus="autofocus" required>
							<option value="">Select Zone</option>
							@foreach($zones as $zone)
							<option value={{$zone->user_level}}>{{$zone->zone_pname}}</option>
							@endforeach
					    </select>
					</td>
					<td>
						<select name="zone-cbo" id="zone-cbo" class="form-control input-sm" autofocus="autofocus" required>
							<option value="">Select Zone</option>
							@foreach($zones as $zone)
							<option value={{$zone->name}}>{{$zone->zone_pname}}</option>
							@endforeach
					    </select>
					</td> -->
				</tr>
			</table>
		</div>
	</div>


@endsection

