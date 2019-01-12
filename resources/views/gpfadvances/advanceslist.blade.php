<?php $num =1; ?>

@foreach($gpfadvances as $data)

    <tr>
        <td style="text-align: center;">{{$num}}</td>
        <td style="text-align: center;"  >{{$data->gpf_no}}</td>
        <td style="text-align: left;"  >{{$data->emp_name}}</td>
        <td style="text-align: left;"  >{{$data->designation}}</td>
        <td style="text-align: center;">{{$data->year}}</td>
        <td style="text-align: right;">{{number_format($data->amount,2)}}</td>
        
        <td style="text-align: left;"  >{{$data->refundable}}</td>        
        
        <td style="text-align: right;"  >{{$data->order_no}}</td>
        <td style="text-align: center;"  >{{$data->order_dt}}</td>
        <td style="text-align: left;"  >{{$data->motive}}</td>
       <!--  <td style="text-align: center;"  >{{$data->bill_no}}</td>
        <td style="text-align: center;"  >{{$data->bill_dt}}</td>
        <td style="text-align: center;"  >{{$data->token_no}}</td>
        <td style="text-align: center;"  >{{$data->tr_voucher_no}}</td>
        <td style="text-align: center;"  >{{$data->tr_voucher_dt}}</td> -->


        
        <td>
            <a href="#" class="btn btn-info btn-xs" id="edit" data="{{$data->id}}" >Edit</a>
        </td>
        
        <!-- <td style="text-align: left;"  >{{$data->id}}</td> -->
    </tr>
<?php $num++; ?>
@endforeach

