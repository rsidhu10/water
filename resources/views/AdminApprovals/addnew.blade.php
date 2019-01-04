@extends('topbar')
@section('mainContent')
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<div class="container" style="text-align: center;"><h3>Add Administrative Approved Schemes</h3></div>
	<div class="container-fluid" style="width: 90%">
	{{Form::open() }}
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
	 					<select class="form-control input-sm" name="zone-cbo" id="zone-cbo"  autofocus="autofocus" required>
						    <option value="" disable="true" selected="true">Select Zone</option>
						    @foreach($zones as $zone)
						      <option value="{{$zone->id}}">{{$zone->zone_name}}</option>
						    @endforeach
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
		{{Form::close()}}
</div>
<script type="text/javascript">
	$('#zone-cbo').on('change', function(e){
		console.log(e);
		var zone_id = e.target.value;
		$.get('/json-circles?zone_id='+ zone_id, function(data){
			console.log(data);
		});
	});

</script>


@endsection

