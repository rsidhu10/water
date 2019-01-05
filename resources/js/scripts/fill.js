//window.load=$( document ).ready(function() {
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
      });
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
      });    
    });
  });

  $('#admin-approval-amt-txt').on('change', function(e){
            console.log(e);
            e.target.value = parseFloat($(this).val()).toFixed(2);
  }); 
  $('#wb-share-txt').on('change',function(e){
          console.log(e);
            e.target.value = parseFloat($(this).val()).toFixed(2);
  }); 
  $('#state-share-txt').on('change',function(e){
            console.log(e);
            e.target.value = parseFloat($(this).val()).toFixed(2);
  }); 
  $('#nrdwp-share-txt').on('change',function(e){
            console.log(e);
            e.target.value = parseFloat($(this).val()).toFixed(2);
  });    



//}  
