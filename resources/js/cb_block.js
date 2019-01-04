window.load=$(document).ready(function(){
	$.ajax({
        type:'POST',
        url: "zone.php",
        success:function(html){
            $('#zone-cbo').html(html);
        }
	});
});
