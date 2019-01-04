$(document).ready(function(){
	$(".like").click(function(){
		var id=$(this).attr("id");
		var name=$(this).attr("name");
		var dataString = 'id='+ id + '&name='+ name;
		$.ajax({
			method:"post",
			url: "models/rating.php",
			data: dataString,
			cache: false,
			success: function(html){
				$('#'+ id).html(html);
			} 
		});
	});
});