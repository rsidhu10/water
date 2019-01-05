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

  $('#scheme_cbo').on('change', function(e){
    console.log(e);
    var scheme_id = e.target.value;
    console.log(scheme_id);
    

    $.get('/json-schemedata?scheme_id=' + scheme_id,function(data) {
      
        $('#division_txt').value  = this.district_id;
        $('#subdivision_txt').value  = this.subdistrict_id;
     

    });
  });

  



//}  
