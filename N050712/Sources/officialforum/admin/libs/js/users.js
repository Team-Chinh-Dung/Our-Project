	$(document).ready(function(){
		$('#load_users').click(function(event){
			event.preventDefault();
			$.ajax({
				url: "models/load_users.php",
				dataType : "html",
				success: function(Result){
					$('#Result_users').html(Result);
				}
			});
		});
		$(document).on('click','a[data-role=update]',function(){
			var id  = $(this).data('id');
			var firstname  = $('#'+id).children('td[data-target=firstname]').text();
			var lastname  = $('#'+id).children('td[data-target=lastname]').text();
			var email  = $('#'+id).children('td[data-target=email]').text();
			var contact_number  = $('#'+id).children('td[data-target=contact_number]').text();
			var address  = $('#'+id).children('td[data-target=address]').text();
			var access_level  = $('#'+id).children('td[data-target=access_level]').text();

			$('#userId').val(id);
			$('#firstname').val(firstname);
			$('#lastname').val(lastname);
			$('#email').val(email);
			$('#contact_number').val(contact_number);
			$('#address').val(address);
			$('#access_level').val(access_level);
			$('#update_users').modal('toggle');
		});
		$('#save').click(function(){			
			var id = $('#userId').val();
			var firstname =  $('#firstname').val();
			var lastname = $('#lastname').val();
			var email = $('#email').val();
			var contact_number = $('#contact_number').val();
			var address = $('#address').val();
			var access_level = $('#access_level').val();

			$.ajax({
				url : 'models/update_users.php',
				method : 'post',
				data : {firstname:firstname, lastname:lastname, email:email,
				 contact_number:contact_number, address:address, access_level:access_level, id:id},
				success : function(response){
					$('#'+id).children('td[data-target=firstname]').text(firstname);
					$('#'+id).children('td[data-target=lastname]').text(lastname);
					$('#'+id).children('td[data-target=email]').text(email);
					$('#'+id).children('td[data-target=contact_number]').text(contact_number);
					$('#'+id).children('td[data-target=address]').text(address);
					$('#'+id).children('td[data-target=access_level]').text(access_level);
					$('#update_users').modal('toggle');
					//alert("Thay doi thanh cong");
					// $('#alert').show('fade');					
				}
			});			
		});
		$(document).on('click','a[data-role=delete]',function(){
			var id = $(this).data('id');
			$('#userid').val(id);
			$('#delete_users').modal('toggle');
		});
		$('#delete').click(function(){
			var id = $('#userid').val();
			$.ajax({
				url : 'models/delete_users.php',
				method : 'post',
				data : {id:id},
				success : function(response){
					$('#delete_users').modal('toggle');
				}
			});
		});
	});