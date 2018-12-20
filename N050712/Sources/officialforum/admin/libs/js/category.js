$(document).ready(function(){
	$('#insert_category').click(function(event){
		event.preventDefault();
		$.ajax({
			url: "models/category.php",
			method:"post",
			data:$('form').serialize(),
			dataType: "text",
			success: function(strMessage){
				$('#message').text(strMessage)
			} 
		})
	})		
})
$(document).ready(function () {
    function load() {
        $.ajax({ //create an ajax request to load_page.php
           	type: "GET",
           	url: "models/category.php",
           	dataType: "html", //expect html to be returned                
           		success: function (result) {
               	$("#categories").html(result);
               	//setTimeout(load, 1000)
          		}
       	});
   	}

   	load(); //if you don't want the click
    //$("#display").click(load); //if you want to start the display on click
});