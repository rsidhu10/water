@extends('topbar')
@section('mainContent')
	<div class="container" style="text-align: center;"><h3>List of Administrative Approved Schemes</h3></div>
	<table class="table table-striped table-responsive table-bordered">
		<thead>
			<tr><th rowspan="2">Sr.</th>
				<th rowspan="2">Zone</th>
				<th rowspan="2">Circle</th>
				<th rowspan="2">District</th>
				<th rowspan="2">Division</th>
				<th rowspan="2">Sub Division</th>
				<th rowspan="2">Block</th>
				<th rowspan="2">Scheme</th>
				<th colspan="4" style="text-align: center;">Admin Approval</th>
			</tr>
			<tr>
				<th>Number</th>
				<th>Date</th>
				<th>Amount</th>
				<th>Head</th>
			</tr>
		</thead>
		<tbody>
		
		@foreach($adminapprovals as $zone)
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

<div>
	<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>	
</div>
<div>
	<div class="container-fluid">
		<form class="form-inline">
	    	<div class="row">
		  		<div class="col-md-1" style="width: 5%;">
		  			<strong>Zone:</strong>
		  		</div>
		  		<div class="col-md-1" style="width: 11%;">
		  			<select name="zone-cbo" id="zone-cbo" class="form-control input-sm" autofocus="autofocus" required>
						<option value="">Select Zone</option>
		    		</select>		
		  		</div>
				<div class="col-md-1" style="width: 5%;">
					<strong>Circle:</strong>
				</div>
				<div class="col-md-1" style="width: 13%;">
					<select name="circle-cbo" id="circle-cbo" class="form-control input-sm" autofocus="autofocus" required>
						<option value="">Select Circle</option>
					</select>
			  	</div>
				<div class="col-md-1" style="width: 7%;">
					<strong>District:</strong>
				</div>
				<div class="col-md-1" style="width: 15%;">
					<select name="district-cbo" id="district-cbo"  class="form-control input-sm" autofocus="autofocus" required>
						<option value="">Select District</option>
					</select>
				</div>
				<div class="col-md-1"  style="width: 5%;">
					<strong>Block:</strong>
				</div>
				<div class="col-md-1" style="width: 15%;">
					<select name="block_cbo" id="block-cbo" class="form-control input-sm" autofocus="autofocus" required>
						<option value="">Select Block</option>
					</select>
				</div>
				<div class="col-md-1"  style="width: 8%;">
					<strong>Scheme:</strong>
				</div>
				<div class="col-md-3" style="width: 15%;">
					<select name="scheme_cbo" id="scheme-cbo" class="form-control input-sm" autofocus="autofocus" required>
						<option value="">Select Scheme</option>
					</select>
				</div>
			</div>
		</div>
	</div>
</form>
</div>
	<div class="container-fluid" style="width: 90%">
   	<div class="table-responsive" id="Combo_details">
		   		<table class="table table-condensed table-striped">
		 			<tr>
		 				<td width="12%" align="left" style="padding-left: 10px;"><span>Zone</span></td>					
		 				<td width="17%" align="left"><span>Circle</span></td>
		 				<td width="17%" align="left"><span>District</span></td>
		 				<td width="17%" align="left"><span>Block</span></td>
		 				<td width="27%" align="left"><span>Scheme</span></td>
		 				<td width="10%" align="center">
		 					<input  type="text" name="division-txt" id="division-txt" style="width: 1px; visibility: hidden; height: 10px;" >
		 					<input  type="text" name="subdivision-txt" id="subdivision-txt" style="width: 1px; visibility: hidden; height: 10px;" >
		 				</td>
		 			</tr>
		 			<tr>
		 				<td>
		 					<select name="zone-cbo" id="zone-cbo" class="form-control input-sm" autofocus="autofocus" required>
							    <option value="">Select Zone</option>
			     			</select>
			     		</td>					
		 				<td>
		 					<select name="circle-cbo" id="circle-cbo" class="form-control input-sm" autofocus="autofocus" required>
							    <option value="">Select Circle</option>
			     			</select>
		 				</td>
		 				<td>
		 					<select name="district-cbo" id="district-cbo"  class="form-control input-sm" autofocus="autofocus" required>
							<option value="">Select District</option>
						</select>
		 				</td>
		 				<td>
		 					<select name="block_cbo" id="block-cbo" class="form-control input-sm" autofocus="autofocus" required>
							<option value="">Select Block</option>
						</select>
		 				</td>
		 				<td>
		 					<select name="scheme_cbo" id="scheme-cbo" class="form-control input-sm" autofocus="autofocus" required>
							<option value="">Select Scheme</option>
						</select>
		 				</td>
		 				<td width="10%" align="center">
		 					<button type="button" name="search" id="search" class="btn btn-info input-sm">Search</button>
		 				</td>
		 			</tr>
 				</table>
 			</div>
</div>

@endsection

