// Rest Button
    
    $('#reset-btn').click(function(){
        document.location.reload();
    });
//

	$('#approved_amt_txt').on('change', function(e){
	        console.log(e);
	        e.target.value = parseFloat($(this).val()).toFixed(2);
	}); 



//

    $('#save-btn').click(function(){
        $('#save-btn').attr('disabled', 'disabled');

        var approvedby = document.getElementById('approvedby_cbo').value;
        var order_no = document.getElementById('order_no_txt').value;
        var order_dt = document.getElementById('order_dt_txt').value;
        var advancetype = document.getElementById('advance_type_cbo').value;
        var reason = document.getElementById('reason_cbo').value;
        var sanction_year = document.getElementById('sanction_year_cbo').value;
        var approved_amt = document.getElementById('approved_amt_txt').value;
        var category = document.getElementById('category_cbo').value;
        var designation = document.getElementById('designation_cbo').value;
        var gpf_no = document.getElementById('gpf_no_txt').value;
        var emp_name = document.getElementById('emp_name_txt').value;
        var certificate = document.getElementById('certificate_cbo').value;
        var certificate_no = document.getElementById('certificate_no_txt').value;
        var certificate_dt = document.getElementById('certificate_dt_txt').value;
        var bill_no = document.getElementById('bill_no_txt').value;
        var bill_dt = document.getElementById('bill_dt_txt').value;
        var token_no = document.getElementById('token_no_txt').value;
        var voucher_no = document.getElementById('voucher_no_txt').value;
        var voucher_dt = document.getElementById('voucher_dt_txt').value;
        
        console.log('approvedby : '+ approvedby);
        console.log('order_no : '+ order_no);
        console.log('order_dt : '+ order_dt);
        console.log('advancetype : '+ advancetype);
        console.log('reason : '+ reason);
        console.log('sanction_year : '+ sanction_year);
        console.log('approved_amt : '+ approved_amt);
        console.log('category : '+ category);
        console.log('designation : '+ designation);
        console.log('gpf_no : '+ gpf_no);
        console.log('emp_name : '+ emp_name);
        console.log('certificate : '+ certificate);
        console.log('certificate_no : '+ certificate_no);
        console.log('certificate_dt : '+ certificate_dt);
        console.log('bill_no : '+ bill_no);
        console.log('bill_dt : '+ bill_dt);
        console.log('token_no : '+ token_no);
        console.log('voucher_no : '+ voucher_no);
        console.log('voucher_dt : '+ voucher_dt);



        




        if(approvedby !='' && order_no != '' && order_dt != '' &&  reason != '' &&  approved_amt != 0 &&  designation != '' &&  gpf_no != 0 &&  emp_name != '' )
        //if(approvedby !='' )
        {
            alert('Going to Save Record');
            document.getElementById('save-form').submit();
            	$('#message').css("visibility", "visible");
                $('#result').html(data);
                $("#save-btn").removeClass('btn-primary');
                $("#save-btn").addClass('btn-success');
                $("#save-btn").text('Saved!');
                var timeoutID = window.setTimeout(function () 
                {
                     alert('Record Saved');
                    $('#message').css("visibility", "hidden");
                    $("#save-btn").removeClass('btn-success');
                    $("#save-btn").addClass('btn-primary');
                    $("#save-btn").text('Add New');
                    //document.location.reload();
                }, 10000);        
        }else{
            $("#message").removeClass('alert-success');
            $("#message").addClass('alert-danger');       
            $('#message').css("visibility", "visible");
            $('#result').html("Fields are Empty - Record not Saved!! ");
            $("#save-btn").removeClass('btn-primary');
            $("#save-btn").addClass('btn-danger');
            $("#save-btn").text('Failed!');
            var timeoutID = window.setTimeout(function () {
                $('#message').css("visibility", "hidden");
                $("#save-btn").removeClass('btn-danger');
                $("#save-btn").addClass('btn-primary');
                $("#save-btn").text('Add New');
                $("#save-btn").removeAttr('disabled');
                
            }, 10000);
        }    
     });
    
