// Rest Button
    
    $('#reset-btn').click(function(){
        document.location.reload();
    });
//

	$('#admin_approval_amt_txt').on('change', function(e){
	        console.log(e);
	        e.target.value = parseFloat($(this).val()).toFixed(2);
	}); 
	$('#wb_share_txt').on('change',function(e){
	      console.log(e);
	        e.target.value = parseFloat($(this).val()).toFixed(2);
	}); 
	$('#state_share_txt').on('change',function(e){
	        console.log(e);
	        e.target.value = parseFloat($(this).val()).toFixed(2);
	}); 
	$('#nrdwp_share_txt').on('change',function(e){
	        console.log(e);
	        e.target.value = parseFloat($(this).val()).toFixed(2);
	});    


//

    $('#save-btn').click(function(){
        $('#save-btn').attr('disabled', 'disabled');
        var zoneID       = document.getElementById("zone_cbo").value;
        var circleID     = document.getElementById("circle_cbo").value;
        var districtID   = document.getElementById("district_cbo").value;
        var divisionID   = document.getElementById("division_txt").value;
        var subdivisionID= document.getElementById("subdivision_txt").value;
        var blockID      = document.getElementById("block_cbo").value;
        var schemeID     = document.getElementById("scheme_cbo").value;
        var approvetype  = document.getElementById("approvaltype_cbo").value;
        var approvedBy   = document.getElementById("approvedby_cbo").value;
        var adminApproval= document.getElementById("admin_approval_no_txt").value;
        var adminApprovaldt  = document.getElementById("admin_approval_dt_txt").value;
        var component    = document.getElementById("component_cbo").value;
        var approvedAmt  = document.getElementById("admin_approval_amt_txt").value;
        var wbShare      = document.getElementById("wb_share_txt").value;
        var stateShare   = document.getElementById("state_share_txt").value;
        var nrdwpShare   = document.getElementById("nrdwp_share_txt").value;
        console.log(zoneID);
        console.log(circleID);
        console.log(districtID);
        console.log(districtID);
        console.log(subdivisionID);
        console.log(blockID);
        console.log(schemeID);
        console.log(nrdwpShare);
        console.log(stateShare);
        console.log(wbShare);
        console.log(adminApproval);
        console.log(adminApprovaldt);
        console.log(component);
        console.log(approvedBy);
        var test = parseFloat(wbShare) + parseFloat(stateShare) + parseFloat(nrdwpShare);
        console.log(test);

        if(schemeID !='' && component != '' && approvetype != '' && adminApproval != '' && adminApprovaldt !='' && approvedAmt !=0){
            console.log("i am here");
            if(approvedAmt != parseFloat(test).toFixed(2)){
                console.log("i am in");
                console.log(approvedAmt);
                console.log(test);
                $("#message").removeClass('alert-success');
                $("#message").addClass('alert-danger');
                $('#message').css("visibility", "visible");
                $('#result').html('Amount does not match');
                $("#save-btn").removeClass('btn-primary');
                $("#save-btn").addClass('btn-danger');
                $("#save-btn").text('Failed!');
            
                document.getElementById("wb_share_txt").value = '0.000';
                var timeoutID = window.setTimeout(function () {
                    $('#message').css("visibility", "hidden");
                    $("#message").removeClass('alert-danger');
                    $("#message").addClass('alert-success');
                    $("#save-btn").removeClass('btn-danger');
                    $("#save-btn").addClass('btn-primary');
                    $("#save-btn").text('Add New');
                    $("#save-btn").removeAttr('disabled');
                    alert('hi');
                }, 2000);
            }else{  

            //    $.ajax({
            //        type:'POST',
            //        url:'approval.php',
            //        data: 'zoneID='+zoneID+'&circleID='+circleID+'&districtID='+districtID+'&divisionID='+divisionID+'&subdivisionID='+subdivisionID+'&blockID='+blockID+'&schemeID='+schemeID+'&approvetype='+approvetype+'&approvedBy='+approvedBy+'&adminApproval='+adminApproval+'&adminApprovaldt='+adminApprovaldt+'&component='+component+'&approvedAmt='+approvedAmt+'&wbShare='+wbShare+'&stateShare='+stateShare+'&nrdwpShare='+nrdwpShare,
            	document.getElementById('save-form').submit();

             //   if(success:function(data){
                	$('#message').css("visibility", "visible");
                    $('#result').html(data);
                    $("#save-btn").removeClass('btn-primary');
                    $("#save-btn").addClass('btn-success');
                    $("#save-btn").text('Saved!');
                    var timeoutID = window.setTimeout(function () {
                        $('#message').css("visibility", "hidden");
                        $("#save-btn").removeClass('btn-success');
                        $("#save-btn").addClass('btn-primary');
                        $("#save-btn").text('Add New');
                        document.location.reload();
                    }, 1000);
               //	});    //success:function(data){
            }        
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
                
            }, 2000);
            
        }
        

     });
    
