$(document).ready(function(){
	$('#filters').keyup(function(){
		var search = $('#filters').val();//this doi voi home
		$.post('models/filters_users.php', {data: search}, function(data){
			$('.usersList').html(data);//#Result_users
		});
	});
	load_data();
	function load_data(page){
		
		$.ajax({
			url : 'models/pagination.php',
			method:"POST",
			data:{page:page},
			success:function(data){
				$("#pagination_data").html(data);
			}
		});
	};

});