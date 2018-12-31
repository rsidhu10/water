@extends('topbar')
@section('mainContent')
	<div class="container" style="text-align: center;"><h3>Zone wise Status</h3></div>
	<table class="table table-striped table-responsive table-bordered">
		<thead>
			<tr>
				<th rowspan="2">Sr.</th>
				<th rowspan="2">Zone</th>
				<th colspan="7" style="text-align: center;">Number of </th>
			</tr>
			<tr>
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
		
		@foreach($zones as $zone)
		<tr>
			<td style="text-align: center;">{{1}}</td>
			<td><a href="zones/{{$zone->id}}">{{$zone->zone_pname}}</a> </td>
			<td>{{$zone->id}}</td>
			<td>{{$zone->id}}</td>
			<td>{{$zone->id}}</td>
			<td>{{$zone->id}}</td>
			<td>{{$zone->id}}</td>
			<td>{{$zone->id}}</td>
			<td></td>
		</tr>
		
		@endforeach
		</tbody>
	</table>
		
	<div class="container">
		<div class="table-responsive" id="Combo_details">
			<table>
				<tr>
					<td>
						
					</td>
					<td>

						  {!! Form::Label('Zone', 'Zone:') !!}
						  <select class="form-control " name="zone_id">
						    @foreach($zones as $zone)
						      <option value="{{$zone->id}}">{{$zone->zone_name}}</option>
						    @endforeach
						  </select>
					</td>

				</tr>
			</table>
	</div>
	</div>	

@endsection

