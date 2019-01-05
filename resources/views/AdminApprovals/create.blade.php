@extends('topbar')
@section('mainContent')
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
 	
  <div class="container" style="text-align: center;">
		<h3>Data Entry of Administrative Approved Schemes</h3>
	</div>
  <div class="container-fluid" style="width: 90%">
    <form method="post" name="save-form" id="save-form" action="{{route('adminapprovals.store')}}">
      {{ csrf_field() }}
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
            <input  type="text" name="division_txt" id="division_txt" style="width: 1px; visibility: hidden; height: 10px;" >
            <input  type="text" name="subdivision_txt" id="subdivision_txt" style="width: 1px; visibility: hidden; height: 10px;" >
          </td>
        </tr>
        <tr>
          <td>
            <select class="form-control input-sm" name="zone_cbo" id="zone_cbo"  autofocus="autofocus" required>
                <option value="" disable="true" Selected hidden>Select Zone</option>
                @foreach($zones as $zone)
                  <option value="{{$zone->id}}">{{$zone->zone_name}}</option>
                @endforeach
            </select>
          </td>         
          <td>
            <select name="circle_cbo" id="circle_cbo" class="form-control input-sm" autofocus="autofocus" required>
                <option value="">Select Circle</option>
            </select>
          </td>
          <td>
            <select name="district_cbo" id="district_cbo"  class="form-control input-sm" autofocus="autofocus" required>
              <option value="">Select District</option>
            </select>
          </td>
          <td>
            <select name="block_cbo" id="block_cbo" class="form-control input-sm" autofocus="autofocus" required>
              <option value="">Select Block</option>
            </select>
          </td>
          <td>
            <select name="scheme_cbo" id="scheme_cbo" class="form-control input-sm" autofocus="autofocus" required>
              <option value="">Select Scheme</option>
            </select>
          </td>
          <td width="10%" align="center">
            <button type="button" name="search" id="search" class="btn btn-info input-sm">Search</button>
          </td>
        </tr>
      </table>
      <div class="alert alert-success" style="visibility: hidden;" id="message">
        <p id="result" name="result" style="text-align: center;">
        </p>
      </div>
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
              <select name="approvaltype_cbo" id="approvaltype_cbo" class="form-control input-sm" autofocus="autofocus" required>
                  <option value="" disable="true" Selected hidden>Select Approval Type</option>
                  <option value="1">New Approval</option>
                  <option value="2">Revised Approval</option>
                  
              </select>
            </td>
            <td>
              <select name="approvedby_cbo" id="approvedby_cbo" class="form-control input-sm" autofocus="autofocus" required>
                  <option value=""  Selected hidden >Select Approved By</option>
                  <option value="1">Government</option>
                  <option value="2">Deputy Commissionor</option>
                  <option value="3">Chief Engineer</option>   
              </select>
            </td>
            <td>
              <select name="component_cbo" id="component_cbo" class="form-control input-sm" autofocus="autofocus" required>
                  <option value=""  Selected hidden >Select Component</option>
                  <option value="101">2a</option>
                  <option value="102">2b</option>
                  <option value="103">1a(i)</option>
                  <option value="104">1a(ii)</option>
                  <option value="105">1a(iii)</option>   
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
              <input class="form-control input-sm" type="text" name="admin_approval_no_txt" id="admin_approval_no_txt" placeholder="Admin Approval No." required>
            </td>
            <td>
              <input class="form-control input-sm" type="date" name="admin_approval_dt_txt" id="admin_approval_dt_txt" placeholder="Admin Approval Date" required> 
            </td>
            <td>
              <input class="form-control input-sm" type="text" name="admin_approval_amt_txt" id="admin_approval_amt_txt" placeholder="Admin Approval Amt."  required >
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
              <input class="form-control input-sm" type="text" name="nrdwp_share_txt" id="nrdwp_share_txt" placeholder="NRDWP Funds." required >              
            </td>
            <td>
              <input class="form-control input-sm" type="text" name="state_share_txt" id="state_share_txt" placeholder="State Share" required >
            </td>
            <td>
              <input class="form-control input-sm" type="text" name="wb_share_txt" id="wb_share_txt" placeholder="World Bank Share" required >
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
  <script src="/resources/js/scripts/adminapprovals/fill.js"></script>
  <script src="/resources/js/scripts/adminapprovals/addnew.js"></script>
  

    
@endsection

