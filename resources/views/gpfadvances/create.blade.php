@extends('topbar')
@section('mainContent')
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
 	
  <div class="container" style="text-align: center;">
		<h3>Data Entry of GPF Advances</h3>
	</div>
  <div class="container-fluid" style="width: 90%">
    <form method="post" name="save-form" id="save-form" action="{{route('gpfadvances.store')}}">
      {{ csrf_field() }}
{{--       <table class="table table-condensed table-striped">
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
            <span>Division</span>
          </td>
          <td width="27%" align="left">
            <span>Blank</span>
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
            <select name="division_cbo" id="division_cbo" class="form-control input-sm" autofocus="autofocus" required>
              <option value="">Select Division</option>
            </select>
          </td>
          <td>
            <select name="scheme_cbo" id="scheme_cbo" class="form-control input-sm" autofocus="autofocus" required>
              <option value="">---------</option>
            </select>
          </td>
          <td width="10%" align="center">
            <button type="button" name="search" id="search" class="btn btn-info input-sm">Search</button>
          </td>
        </tr>
      </table>
 --}}      <div class="alert alert-success" style="visibility: hidden;" id="message">
        
        <p id="result" name="result" style="text-align: center;">
        </p>
      </div>
      <div>
        @if(count($errors) > 0)
          @foreach($errors->all() as $error)
            <p class="alert alert-danger">{{$error}}</p>
          @endforeach
        @endif    
      </div>
     {{-- <div  class="table-responsive" id="Combo_details" >
        <table class="table table-striped" style="width: 75%; align-self: center;"> --}}
        <table class="table table-condensed table-borderless">
          <tr>
            <th width="25%" >
              <span>Advance Approved By</span>
            </th>
            <th  width="20%" >
              <span>Order No</span>
            </th>
            <th width="25%" >
              <span>Order Date</span>
            </th>
            <th width="30%" >
              <span>Advance Type</span>
            </th>
          </tr>
          <tr>  
            <td>
              <select name="approvedby_cbo" id="approvedby_cbo" class="form-control input-sm" autofocus="autofocus" required>
                  <option value=""  Selected hidden >Select Approved By</option>
                  <option value="1">HOD Office</option>
                  <option value="2">Circle Office</option> 
              </select>
            </td>
            <td>
              <input class="form-control input-sm" type="text" name="order_no_txt" id="order_no_txt" placeholder="Order No." required >
            </td>
            <td>
              <input class="form-control input-sm" type="date" name="order_dt_txt" id="order_dt_txt" required >
              
            </td>

            <td>
              <select name="advance_type_cbo" id="advance_type_cbo" class="form-control input-sm" autofocus="autofocus" required>
                  <option value=""  Selected hidden >Select Type</option>
                  <option value="Refundable">Refundable</option>
                  <option value="Non-Refundable" selected="true">Non-Refundable</option>

              </select>
            <td>
          </tr>
          <tr>
            <th>
              <span>Motive</span>       
            </th>
            <th>
              <span>Sanction Year</span>        
            </th>
            <th>
              <span>Advance Approved (In Rs.)</span>        
            </th>
            <th>
              <span>Category</span>        
            </th>
          </tr>
          <tr>  
            <td>
              <select name="reason_cbo" id="reason_cbo" class="form-control input-sm" autofocus="autofocus" required>
                  <option value=""  Selected hidden >Select Reason</option>
                  @foreach($motives as $data)
                    <option value="{{$data->id}}">{{$data->motive}}</option>
                  @endforeach

                  {{-- <option value="1">Son's Marriage</option>
                  <option value="2">Daughter's Marriage</option>
                  <option value="3">To Build House</option>
                  <option value="4">House Repair</option>
                  <option value="5">House Purchase</option>
 --}}

              </select>
            <td>
              <select name="sanction_year_cbo" id="sanction_year_cbo" class="form-control input-sm" autofocus="autofocus" required>
                  <option value=""  Selected hidden >Select Year</option>
                  <option value="2018-2019" selected="true">2018-2019</option>
                  <option value="2019-2020">2019-2020</option>

              </select>
            <td>
              <input class="form-control input-sm" type="text" name="approved_amt_txt" id="approved_amt_txt" placeholder="Approved Amount"  required >
            </td>
            <td>
                <select name="category_cbo" id="category_cbo" class="form-control input-sm" autofocus="autofocus" required>
                  <option value=""  Selected hidden >Select Category</option>
                  <option value="11">ENGG</option>
                  <option value="12">TECH</option>
                  <option value="13">MIN(HQ)</option>
                  <option value="14">MIN(FIELD)</option>
                  <option value="15">MISC</option>
                  <option value="16">PHE/PB</option>
                </select>
              </td>
          </tr>
          <tr>
            <th>
              <span>Employee GPFund No.</span>
            </th>
            <th colspan="2">
              <span>Employee Name</span>
            </th>
            <th>
              <span>Designation</span>
            </th>
          </tr>
          <tr>
            <td>
              <input class="form-control input-sm" type="text" name="gpf_no_txt" id="gpf_no_txt" placeholder="GPF No. (e.g : 123)" required >              
            </td>
            <td colspan="2">
              <input class="form-control input-sm" type="text" name="emp_name_txt" id="emp_name_txt" placeholder="Employee Name" required >
            </td>
            <td>
                <select name="designation_cbo" id="designation_cbo" class="form-control input-sm" autofocus="autofocus" required>
                  <option value=""  Selected hidden >Select Designation</option>
                  
              </select>
              </td>
           
          </tr>
          <tr>
            <th>
              <span>Certificate Issued</span>
            </th>
            <th>
              <span>Certificate No</span>
            </th>
            <th>
              <span>Certificate Date</span>
            </th>
            <th>
              <span>Bill No</span>
            </th>
              
            </tr>
            <tr>
              <td>
                <select name="certificate_cbo" id="certificate_cbo" class="form-control input-sm" autofocus="autofocus" required>
                  <option value=""  Selected hidden >Select Status</option>
                  <option value="0">No</option>
                  <option value="1">Yes</option>
                </select>
                

              </td>
               <td>
              <input class="form-control input-sm" type="text" name="certificate_no_txt" id="certificate_no_txt" placeholder="Letter No vide which Certificate Issued" required disabled="true" >
            </td> 
            <td>
             <input class="form-control input-sm" type="date" name="certificate_dt_txt" id="certificate_dt_txt"  required disabled="true">
            </td>
             <td>
              <input class="form-control input-sm" type="text" name="bill_no_txt" id="bill_no_txt" placeholder="Bill No." required >
            </td>  
            </tr>
             <tr>
              <th>
                <span>Bill Date</span>
              </th>
              <th>
                <span>Token No</span>
              </th>
              <th>
                <span>Treasury Voucher No</span>
              </th>
              <th>
                <span>Treasury Voucher Date</span>
              </th>
              
            </tr>
            <tr>
              <td>
                <input class="form-control input-sm" type="date" name="bill_dt_txt" id="bill_dt_txt"  required >
              </td>
               <td>
                  <input class="form-control input-sm" type="text" name="token_no_txt" id="token_no_txt" placeholder="Token Number" required >
              </td>
              <td>
                  <input class="form-control input-sm" type="text" name="voucher_no_txt" id="voucher_no_txt" placeholder="Treasury Voucher Number" required >
              </td>
              <td>
                <input class="form-control input-sm" type="date" name="voucher_dt_txt" id="voucher_dt_txt"  required >
              </td>
            </tr>
            <tr>
            
            <td colspan="4"  align="center">
              <div class="col-md-12" >
                  <button type="button" name="delete-btn" id="delete-btn" class="btn btn-danger input-sm">Delete</button>
                  <button type="button" name="reset-btn" id="reset-btn" class="btn btn-primary input-sm">Reset</button>
                  <button type="button" name="save-btn" id="save-btn" class="btn btn-primary input-sm">Save</button>
                  <button type="button" name="update-btn" id="update-btn" class="btn btn-primary input-sm">Update</button>
                </div>
            </td>
          </tr>
         
          
     </table>




        {{ Form::close() }}
      </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="/resources/js/scripts/gpfadvances/fill.js"></script>
  <script src="/resources/js/scripts/gpfadvances/addnew.js"></script>
  

    
@endsection

