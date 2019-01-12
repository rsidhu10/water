@extends('topbar')
@section('mainContent')
@include('gpfadvances.addadvance')
  
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <div class="container">
      <div class="row">
        <div class="col-md-12 ">
          <div class="panel panel-primary">
            <div class="panel-heading">
                Employee's Advances Detail
                <button class="btn btn-info btn-xs" data-toggle="modal" data-target="#advModal">Add Advance</button>
                <button class="btn btn-info pull-right btn-xs" id="show-data">Search</button>
            </div>            
            <div class="panel-body">
              <div class="table-responsive-sm">
                <table class="table table-bordered table-striped table-condensed  table-hover">
                  <thead>
                    <tr>
                      <th>Sr.</th>
                      <th>GPF No.</th>
                      <th>Employee Name</th>
                      <th>Designation</th>
                      <th>Year</th>
                      <th>Amount</th>
                      <th>Refundable</th>
                      <th>Order No.</th>
                      <th>Order Date</th>
                      <th>Motive</th>
                      {{-- <th>Bill No</th>
                      <th>Bill Dt</th>
                      <th>Token No.</th>
                      <th>Tr.Vh.No.</th>
                      <th>Tr.Vh.Dt</th>--}}
                      <th>Action</th> 
                     
                    </tr>
                  </thead>
                  <tbody id="empdata">
                    
                  </tbody>
                  
                </table>
              </div>  
            </div>
            
          </div>
          
        </div>
        
      </div>
      
    </div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
@endsection

@section('script')
  <script type="text/javascript">
    $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

      $('#show-data').on('click', function(){
        //alert('test action');

         //$.get('/show-gpf-adv', function(data){  
           $.get("{{ URL::to('/show-gpf-adv')}}", function(data){  
           console.log(data);
            
          $('#empdata').empty().html(data);
          // var num = 1;
          // $('#empdata').empty();
          // $.each(data,function(i, result){
          //   var tr = $("<tr/>");
          //   tr.append($("<td/>",{
          //     text : num
          //   })).append($("<td/>",{
          //     text : result.emp_name
          //   })).append($("<td/>",{
          //     text : result.emp_designation
          //   })).append($("<td/>",{
          //     text : result.year
          //   })).append($("<td/>",{
          //     text : result.amount
          //   })).append($("<td/>",{
          //     text : result.refundable
          //   })).append($("<td/>",{
          //     text : result.order_no
          //   })).append($("<td/>",{
          //     text : result.order_dt
          //   })).append($("<td/>",{
          //     text : result.bill_no
          //   })).append($("<td/>",{
          //     text : result.bill_dt
          //   })).append($("<td/>",{
          //     text : result.token_no
          //   })).append($("<td/>",{
          //     text : result.tr_voucher_no
          //   })).append($("<td/>",{
          //     text : result.tr_voucher_dt
          //   }))
          //   $('#empdata').append(tr);
          //   num++;

          // });
        
         })

      });

      $('#frm-insert').on('submit',function(e){
        //alert("hi");
        e.preventDefault();
        var data = $(this).serialize();
        console.log(data)
        var url  = $(this).attr('action');
        var post = $(this).attr('method');
        $.ajax({
          type : post,
          url  : url,
          data : data,
          dataTy : 'json',
          success:function(data)
          {
            console.log('i m back');
            console.log(data);
          }
        })

      })
    

  </script>


@endsection






{{-- 

    <div class="container" style="text-align: center;">
    <h3>List of Administrative Approved Schemes</h3>
  </div>
    <div class="container">
      <div class="col-lg-4">
          <h2>Laravel 5.5 JQuery Ajax Example</h2>
          {{ Form::open() }}
            <div class="form-group">
              <label for="">Your Provinces</label>
              <select class="form-control" name="provinces" id="provinces">
                  <option value="0" disable="true" selected="true">=== Select Provinces ===</option>
                  @foreach ($zones as $key => $value)
                      <option value="{{$value->id}}">{{ $value->zone_name }}</option>
                  @endforeach 
              </select>
          </div>

          <div class="form-group">
            <label for="">Your Regencies</label>
            <select class="form-control" name="regencies" id="regencies">
              <option value="0" disable="true" selected="true">=== Select Regencies ===</option>
            </select>
          </div>

          <div class="form-group">
            <label for="">Your Districts</label>
            <select class="form-control" name="districts" id="districts">
              <option value="0" disable="true" selected="true">=== Select Districts ===</option>
            </select>
          </div>

          <div class="form-group">
            <label for="">Your Villages</label>
            <select class="form-control" name="villages" id="villages">
              <option value="0" disable="true" selected="true">=== Select Villages ===</option>
            </select>
          </div>

        {{ Form::close() }}
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <script type="text/javascript">
      $('#provinces').on('change', function(e){
        console.log(e);
        var province_id = e.target.value;
        $.get('/json-circles?province_id=' + province_id,function(data) {
          console.log(data);
          $('#regencies').empty();
          $('#regencies').append('<option value="0" disable="true" selected="true">=== Select Regencies ===</option>');

          $('#districts').empty();
          $('#districts').append('<option value="0" disable="true" selected="true">=== Select Districts ===</option>');

          $('#villages').empty();
          $('#villages').append('<option value="0" disable="true" selected="true">=== Select Villages ===</option>');

          $.each(data, function(index, regenciesObj){
            $('#regencies').append('<option value="'+ regenciesObj.id +'">'+ regenciesObj.circle_name +'</option>');
          })
        });
      });

      $('#regencies').on('change', function(e){
        console.log(e);
        var regencies_id = e.target.value;
        $.get('/json-districts?regencies_id=' + regencies_id,function(data) {
          console.log(data);
          $('#districts').empty();
          $('#districts').append('<option value="0" disable="true" selected="true">=== Select Districts ===</option>');

          $.each(data, function(index, districtsObj){
            $('#districts').append('<option value="'+ districtsObj.id +'">'+ districtsObj.district_name +'</option>');
          })
        });
      });

      $('#districts').on('change', function(e){
        console.log(e);
        var districts_id = e.target.value;
        $.get('/json-blocks?districts_id=' + districts_id,function(data) {
          console.log(data);
          $('#villages').empty();
          $('#villages').append('<option value="0" disable="true" selected="true">=== Select Villages ===</option>');

          $.each(data, function(index, villagesObj){
            $('#villages').append('<option value="'+ villagesObj.id +'">'+ villagesObj.block_name +'</option>');
          })
        });
      });


    </script> --}}


