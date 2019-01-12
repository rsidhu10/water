

<div class="modal fade" id="advModal" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">New Advance</h4>
			</div>
			<form action="{{URL::to('gpfadvances/store') }}" method="POST" id="frm-insert">
				<div class="modal-body">
					<div class="col-4-md">
						<div class="form-group">
							<label>G.P. Fund Number</label>
							<input type="text" name="emp_gpf_no" id="emp_gpf_no" class="form-control">
							<label>Name</label>
							<input type="text" name="emp_name" class="form-control" id="emp_name">
							<label>Designation</label>
							<select class="form-control" id="designation_id" name="designation_id">
							<option selected hidden value="#">Select Designation</option>
							@foreach($designations as $data)
								<option value="{{ $data->id }}">{{ $data->designation}}</option>
							@endforeach
							</select>
							<label>Year</label>
							<select class="form-control" id="year_id" name="year_id">
								<option selected hidden value="#"> Select Year</option>
								<option value="2017-2018">2017-2018</option>
								<option value="2018-2019">2018-2019</option>
							</select>
							<label>Amount</label>
							<input type="text" id="amount_id" name="amount_id" class="form-control">
							<label>Refundable</label>
							<select class="form-control" id="advtype_id" name="advtype_id">
								<option selected hidden value="#"> Select Type</option>
								<option value="Refundable">Refundable</option>
								<option value="Non-Refundable">Non-Refundable</option>
							</select>
							<label>Order Number</label>
							<input type="text" id="order_no_id" name="order_no_id" class="form-control">
							<label>Order Date</label>
							<input type="date" id="order_dt_id" name="order_dt_id" class="form-control">
							<label>Motive</label>
							<input type="text" id="adv_motive" name="adv_motive" class="form-control">
						</div>
					</div>
					
				</div>
				<div class="modal-footer">
					
					<input type="submit" class="btn btn-success pull-left" value="Save">

					<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
				</div>
			</form>	
		</div>	
	</div>
	
</div>