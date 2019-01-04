$(document).ready(function(){
	//$('#categories').load('views/pages/error.php');
	//insert
	$('#insert_category').click(function(event){
		event.preventDefault();
		$.ajax({
			url: "models/insert_category.php",
			method:"post",
			data:$('form').serialize(),
			dataType: "text",
			success: function(html){

        		setTimeout(function() {
          			$(".alert").alert('close');
        		}, 2000);
				  	$('#categories').html(html);
			} 
		});
	});
	//update
	$(document).on('click','a[data-role=update_category]',function(){
		var category_id = $(this).data('id');
		var category_name  = $('#'+category_id).children('td[data-target=category_name]').text();
		$('#category_id').val(category_id);
		$('#category_name').val(category_name);
		$('#update_category').modal('toggle');
	});
	$('#category_save').click(function(){
		var category_id = $('#category_id').val();
		var category_name = $('#category_name').val();
		$.ajax({
			url : 'models/update_category.php',
			method : 'post',
			data : {category_name:category_name, category_id:category_id},
			success : function(html){
				$('#'+category_id).children('td[data-target=category_name]').text(category_name);
				$('#update_category').modal('toggle');
				setTimeout(function() {
          					$(".alert").alert('close');
        				}, 2000);
				 $('#categories').html(html);
			}
		});
	});
	//delete
	$(document).on('click','a[data-role=delete_category]',function(){
		var id = $(this).data('id');
		$('#categoryid').val(id);
		$('#delete_category').modal('toggle');
	});
	$('#deletecategory').click(function(){
		var id = $('#categoryid').val();
		$.ajax({
			url : 'models/delete_category.php',
			method : 'post',
			data : {id:id},
			success : function(html){
				$('#delete_category').modal('toggle');
				       setTimeout(function() {
          					$(".alert").alert('close');
        				}, 2000);
				 $('#categories').html(html);
			}
		});
	});		
});
// $(document).ready(function () {
//     //function load() {
//         $.ajax({ //create an ajax request to load_page.php
//            	type: "POST",
//            	url: "models/category.php",
//            	dataType: "html", //expect html to be returned                
//            		success: function (html) {
//                 $("#categories").html(html);
//                 console.log(result);
//                 //setTimeout(load, 3000);
//                 // $.each(result, function(i, val){
//                 //   $("#categories").append(val[0]);
//                 //   // $("#categories").append('<tr><td>'+val[0]+'</td>'+'<td>'+ val[1]+'</td></tr>');
//                 //   console.log(result);
//                 // });                 
//                	// 
//           		}
//        	});
//    	//}

//    	//load(); //if you don't want the click
//     //$("#display").click(load); //if you want to start the display on click
// });
