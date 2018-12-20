<?php 
	$page_title = 'Chuyên mục';
?>
	<div class="form-group">
		
		<form method="post">			
			<input type="text" id="category" name="category" placeholder="Thêm chuyên mục">
			<input type="submit" name="insert_category" id="insert_category" value="Thêm">
		</form>
	</div>
	<div id="categories"></div>
<?php
	foreach ($category as $cate) {
?>
	
	<table class="table table-bordered">
		<tr>
			<th><?php echo $cate->category_name ?></th>
		</tr>
	</table>
<?php 
	}
	
 ?>
 	