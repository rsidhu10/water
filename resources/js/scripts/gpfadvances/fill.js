window.load=$(document).ready(function(){
//window.load=$( document ).ready(function() {
  $('#zone_cbo').on('change', function(e){
    console.log(e);
    var zone_id = e.target.value;
    $.get('/json-circles?zone_id=' + zone_id,function(data) {
      console.log(data);
      console.log(zone_id);
      $('#circle_cbo').empty();
      $('#circle_cbo').append('<option value="0" disable="true" Selected hidden> Select Circle </option>');

      $('#district_cbo').empty();
      $('#district_cbo').append('<option value="0" disable="true" Selected hidden> Select District </option>');

      $('#block_cbo').empty();
      $('#block_cbo').append('<option value="0" disable="true" Selected hidden> Select Block </option>');

      $('#scheme_cbo').empty();
      $('#scheme_cbo').append('<option value="0" disable="true" Selected hidden> Select Scheme </option>');

      $.each(data, function(index, dataObj){
        $('#circle_cbo').append('<option value="'+ dataObj.id +'">'+ dataObj.circle_name +'</option>');
      })
    });
  });

  $('#circle_cbo').on('change', function(e){
    console.log(e);
    var circle_id = e.target.value;
    
    $.get('/json-districts?circle_id=' + circle_id,function(data) {
      console.log(data);
      console.log(circle_id);

      $('#district_cbo').empty();
      $('#district_cbo').append('<option value="0" disable="true" Selected hidden> Select District </option>');

      $('#block_cbo').empty();
      $('#block_cbo').append('<option value="0" disable="true" Selected hidden> Select Block </option>');

      $('#scheme_cbo').empty();
      $('#scheme_cbo').append('<option value="0" disable="true" Selected hidden> Select Scheme </option>');

      $.each(data, function(index, dataObj){
        $('#district_cbo').append('<option value="'+ dataObj.id +'">'+ dataObj.district_name +'</option>');
      })
    });
  });

  $('#district_cbo').on('change', function(e){
    console.log(e);
    var district_id = e.target.value;
    
    $.get('/json-blocks?district_id=' + district_id,function(data) {
      console.log(data);
      console.log(district_id);

      $('#block_cbo').empty();
      $('#block_cbo').append('<option value="0" disable="true" Selected hidden> Select Block </option>');

      $('#scheme_cbo').empty();
      $('#scheme_cbo').append('<option value="0" disable="true" Selected hidden> Select Scheme </option>');

      $.each(data, function(index, dataObj){
        $('#block_cbo').append('<option value="'+ dataObj.id +'">'+ dataObj.block_name +'</option>');
      });
    });
  });

  $('#block_cbo').on('change', function(e){
    console.log(e);
    var block_id = e.target.value;
    
    $.get('/json-schemes?block_id=' + block_id,function(data) {
      console.log(data);
      console.log(block_id);

      $('#scheme_cbo').empty();
      $('#scheme_cbo').append('<option value="0" disable="true" Selected hidden> Select Scheme </option>');

      $.each(data, function(index, dataObj){
        $('#scheme_cbo').append('<option value="'+ dataObj.id +'">'+ dataObj.scheme_name +'</option>');
      });    
    });
  });

  // $('#scheme_cbo').on('change', function(e){
  //   console.log(e);
  //   var scheme_id = e.target.value;
    
  //   $.get('/json-schemedata?scheme_id=' + scheme_id,function(data) {
  //     console.log(data);
  //     console.log(scheme_id);

  //     // $(data, function(dataObj){
  //       $('#division_txt').value = data.division_id;
  //       var temp = $('#division_txt').value;
  //       alert(temp);
  //     // });    
  //   });
  // });

  function formatDate(date) {
    var d = new Date(date),
        month = '' + (d.getMonth() + 1),
        day = '' + d.getDate(),
        year = d.getFullYear();

    if (month.length < 2) month = '0' + month;
    if (day.length < 2) day = '0' + day;

 //   return [year, month, day].join('-');
  return [day, month, year].join('-');
}



  $('#category_cbo').on('change', function(e){
    console.log(e);
    var id = e.target.value;
    $.get('/json-designs?id=' + id,function(data) {
      console.log(data);
      console.log(id);
      
      $('#designation_cbo').empty();
      $('#designation_cbo').append('<option value="0" disable="true" Selected hidden> Select Designation </option>');

      $.each(data, function(index, dataObj){
        $('#designation_cbo').append('<option value="'+ dataObj.id +'">'+ dataObj.designation +'</option>');
      })
    });
  });

  
  //$("#save-btn").removeAttr('disabled');
  $("#certificate_no").attr('disabled', 'disabled');
  $("#certificate_dt").attr('disabled', 'disabled');
  
  //$('#certificate_cbo').append('<option value="'+ dataObj.id +'">'+ dataObj.designation +'</option>');
    


  // Function for Certificate 
  $('#certificate_cbo').on('change',function(){
    //alert('Certificate Combo Changed');
        var temp_val = $(this).val();
        
        if(temp_val == "0"){
        console.log("Status Changed : " + temp_val);  
            $('#certificate_no_txt').attr('disabled', 'disabled');
            $('#certificate_dt_txt').attr('disabled', 'disabled');
            document.getElementById('certificate_no_txt').value = '';
            document.getElementById('certificate_dt_txt').value = '';
           
        }else if(temp_val == "1"){
            console.log("Status Changed : " + temp_val);
            $('#certificate_no_txt').removeAttr('disabled');
            $('#certificate_dt_txt').removeAttr('disabled');
        }    
        
    });     
 
  
function advtype(e){
    var temp = e;
    if(temp == 1){
    return "Refundable"
    }else{
      return "Non-Refundable"
    } 
  }
  


}); 



//}  
