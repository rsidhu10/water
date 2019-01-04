@extends('topbar')
@section('mainContent')
	
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
 	<div class="container" style="text-align: center;">
		<h3>List of Administrative Approved Schemes</h3>
	</div>
  <div class="container-fluid" style="width: 90%">
    {{Form::open() }}
      <table class="table table-condensed table-striped">
        <tr>
          <td width="12%" align="left" style="padding-left: 10px;">
            <span>Zone</span>
          </td>         
          <td width="17%" align="left">
            <span>Circle</span>
          </td>
          <td width="17%" align="left">
            <span>District</span>
          </td>
          <td width="17%" align="left">
            <span>Block</span>
          </td>
          <td width="27%" align="left">
            <span>Scheme</span>
          </td>
          <td width="10%" align="center">
            <input  type="text" name="division-txt" id="division-txt" style="width: 1px; visibility: hidden; height: 10px;" >
            <input  type="text" name="subdivision-txt" id="subdivision-txt" style="width: 1px; visibility: hidden; height: 10px;" >
          </td>
        </tr>
        <tr>
          <td>
            <select class="form-control input-sm" name="zone-cbo" id="zone-cbo"  autofocus="autofocus" required>
                <option value="" disable="true" Selected hidden>Select Zone</option>
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
     {{-- <div  class="table-responsive" id="Combo_details" >
        <table class="table table-striped" style="width: 75%; align-self: center;"> --}}
        <table class="table table-condensed table-striped">
          <tr>
            <td>
              <span>Approval Type</span>
            </td>
            <td>
              <span>Approved By</span>
            </td>
            <td>
              <span>Component</span>
            </td>
          </tr>
          <tr>  
            <td>
              <select name="approvaltype-cbo" id="approvaltype-cbo" class="form-control input-sm" autofocus="autofocus" required>
                  <option value="" selected=hidden>Select Approval Type</option>
                 
              </select>
            </td>
            <td>
              <select name="approvedby-cbo" id="approvedby-cbo" class="form-control input-sm" autofocus="autofocus" required>
                  <option value="" selected=hidden >Select Approved By</option>   
              </select>
            </td>
            <td>
              <select name="component-cbo" id="component-cbo" class="form-control input-sm" autofocus="autofocus" required>
                  <option value="">Select Component</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>
              <span>Admin Approval No.</span>       
            </td>
            <td>
              <span>Admin Approval Date</span>        
            </td>
            <td>
              <span>Admin Approval Amount</span>        
            </td>
          </tr>
          <tr>  
            <td>
              <input class="form-control input-sm" type="text" name="admin-approval-no-txt" id="admin-approval-no-txt" placeholder="Admin Approval No." required>
            </td>
            <td>
              <input class="form-control input-sm" type="date" name="admin-approval-dt-txt" id="admin-approval-dt-txt" placeholder="Admin Approval Date" required> 
            </td>
            <td>
              <input class="form-control input-sm" type="text" name="admin-approval-amt-txt" id="admin-approval-amt-txt" placeholder="Admin Approval Amt."  required >
            </td>
          </tr>
          <tr>
            <td>
              <span>NRDWP Share</span>
            </td>
            <td>
              <span>State Share</span>
            </td>
            <td>
              <span>World Bank Share</span>
            </td>
          </tr>
          <tr>
            <td>
              <input class="form-control input-sm" type="text" name="nrdwp-share-txt" id="nrdwp-share-txt" placeholder="NRDWP Funds." required >              
            </td>
            <td>
              <input class="form-control input-sm" type="text" name="state-share-txt" id="state-share-txt" placeholder="State Share" required >
            </td>
            <td>
              <input class="form-control input-sm" type="text" name="wb-share-txt" id="wb-share-txt" placeholder="World Bank Share" required >
            </td> 
          </tr>
          <tr>
            
            <td colspan="4"  align="center">
              <div class="col-md-12" >
                  <button type="button" name="delete-btn" id="delete-btn" class="btn btn-danger input-sm">Delete</button>
                  <button type="button" name="reset-btn" id="reset-btn" class="btn btn-primary input-sm">Reset</button>
                  <button type="button" name="save-btn" id="save-btn" class="btn btn-primary input-sm">Add New</button>
                  <button type="button" name="update-btn" id="update-btn" class="btn btn-primary input-sm">Update</button>
                </div>
            </td>
          </tr>
        {{--}}  </div>--}}
         
     </table>




        {{ Form::close() }}
      </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="/resources/js/scripts/fill.js"></script>
{{--
    <script type="text/javascript">
      $('#zone-cbo').on('change', function(e){
        console.log(e);
        var zone_id = e.target.value;
        $.get('/json-circles?zone_id=' + zone_id,function(data) {
          console.log(data);
          $('#circle-cbo').empty();
          $('#circle-cbo').append('<option value="0" disable="true" Selected hidden> Select Circle </option>');

          $('#district-cbo').empty();
          $('#district-cbo').append('<option value="0" disable="true" Selected hidden> Select District </option>');

          $('#block-cbo').empty();
          $('#block-cbo').append('<option value="0" disable="true" Selected hidden> Select Block </option>');

          $('#scheme-cbo').empty();
          $('#scheme-cbo').append('<option value="0" disable="true" Selected hidden> Select Scheme </option>');

          $.each(data, function(index, dataObj){
            $('#circle-cbo').append('<option value="'+ dataObj.id +'">'+ dataObj.circle_name +'</option>');
          })
        });
      });

      $('#circle-cbo').on('change', function(e){
        console.log(e);
        var circle_id = e.target.value;
        
        $.get('/json-districts?circle_id=' + circle_id,function(data) {
          console.log(data);

          $('#district-cbo').empty();
          $('#district-cbo').append('<option value="0" disable="true" Selected hidden> Select District </option>');

          $('#block-cbo').empty();
          $('#block-cbo').append('<option value="0" disable="true" Selected hidden> Select Block </option>');

          $('#scheme-cbo').empty();
          $('#scheme-cbo').append('<option value="0" disable="true" Selected hidden> Select Scheme </option>');

          $.each(data, function(index, dataObj){
            $('#district-cbo').append('<option value="'+ dataObj.id +'">'+ dataObj.district_name +'</option>');
          })
        });
      });

      $('#district-cbo').on('change', function(e){
        console.log(e);
        var district_id = e.target.value;
        
        $.get('/json-blocks?district_id=' + district_id,function(data) {
          console.log(data);

          $('#block-cbo').empty();
          $('#block-cbo').append('<option value="0" disable="true" Selected hidden> Select Block </option>');

          $('#scheme-cbo').empty();
          $('#scheme-cbo').append('<option value="0" disable="true" Selected hidden> Select Scheme </option>');

          $.each(data, function(index, dataObj){
            $('#block-cbo').append('<option value="'+ dataObj.id +'">'+ dataObj.block_name +'</option>');
          })
        });
      });

      $('#block-cbo').on('change', function(e){
        console.log(e);
        var block_id = e.target.value;
        
        $.get('/json-schemes?block_id=' + block_id,function(data) {
          console.log(data);

          $('#scheme-cbo').empty();
          $('#scheme-cbo').append('<option value="0" disable="true" Selected hidden> Select Scheme </option>');

          $.each(data, function(index, dataObj){
            $('#scheme-cbo').append('<option value="'+ dataObj.id +'">'+ dataObj.scheme_name +'</option>');
          })
        });
      });

    </script>
--}}



@endsection

