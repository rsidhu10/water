@extends('layouts.app')
@section('content')

    
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <div class="container" style="text-align: center;">
    <h3>List of Employee's GPF Advances</h3>
  
    {{Form::open() }}
      <table class="table table-condensed table-striped">
        <tr>
          <td width="12%" align="left" style="padding-left: 10px;">
            <span>Category</span>
          </td>         
          <td width="17%" align="left">
            <span>GPF Number</span>
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
                @foreach($gpfadvances as $data)
                  <option value="{{$data->id}}">{{$data->emp_name}}</option>
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
      <div class="container">
        <table class="table table-condensed table-bordered">
          <tr>
            <th>Sr.</th>
            <th>Name</th>
            <th>Designation</th>
            <th>Year</th>
            <th>Amount</th>
            <th>Refundable</th>
            <th>Order No.</th>
            <th>Order Dt</th>
            {{-- <th>Bill No</th>
            <th>Bill Dt</th>
            <th>Token No.</th>
            <th>Tr.Vh.No.</th>
            <th>Tr.Vh.Dt</th> --}}
            
          </tr>
            <?php $num =1; ?>
            @foreach($gpfadvances as $data)
            <tr>
              <td style="text-align: center;">{{$num}}</td>
              <td style="text-align: left;"><a href="zones/{{$data->id}}">{{$data->emp_name}}</a> </td>
              <td style="text-align: left;">{{$data->emp_designation}}</td>
              <td>{{$data->year}}</td>
              <td style="text-align: right;">{{number_format($data->amount,2)}}</td>
              <td>{{$data->refundable}}</td>
              <td>{{$data->order_no}}</td>
              <td>{{$data->order_dt}}</td>
              <td>{{\Carbon\Carbon::now()->toDateString() }}</td>
            </tr>
            <?php $num++; ?>
            @endforeach
          </tr>
          {{ $gpfadvances->links() }}






          </tr>
        </table>

      </div>
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="/resources/js/scripts/adminapprovals/fill.js"></script>
 


<script type="text/javascript">
window.load=$(document).ready(function(){
    function formatDate(date) {
      alert('hi');
    var d = new Date(date),
        month = '' + (d.getMonth() + 1),
        day = '' + d.getDate(),
        year = d.getFullYear();

    if (month.length < 2) month = '0' + month;
    if (day.length < 2) day = '0' + day;

 //   return [year, month, day].join('-');
  return [day, month, year].join('-');
}

});
  </script>
@endsection