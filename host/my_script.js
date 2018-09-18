$("#sub").click(function(){
	$.post($("#myDoc").attr("action"), $("#myDoc :input").serializeArray(),function(info){ $("#result").html(info); } );
	clearInput();
});
$("#myDoc").submit( function(){
	return false;	
});
 function clearInput(){
	 $("#myDoc :input").each(function(){
		 $(this).val('');
	 });
 }