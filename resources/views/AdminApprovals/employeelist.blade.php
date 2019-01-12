           <?php $num =1; ?>
            @foreach($employees as $data)
            <tr>
              <td style="text-align: center;">{{$num}}</td>
              <td style="text-align: left;"  >{{$data->id}}</td>
              <td style="text-align: left;"  >{{$data->emp_name}}</td>
              <td style="text-align: left;"  >{{$data->designation}}</td>
              <td style="text-align: left;"  >{{$data->pan_card}}</td>
              <td style="text-align: left;"  >{{$data->month}}</td>
              <td style="text-align: right;">{{number_format($data->gross_pay,2)}}</td>
              <td style="text-align: right;">{{number_format($data->income_tax,2)}}</td>
            </tr>
            <?php $num++; ?>
            @endforeach
 