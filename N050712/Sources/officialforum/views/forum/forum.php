<?php 
	$page_title = 'Diễn đàn';
 ?>
<div class="container">
	<div class="col-sm-8">
	<?php 
	foreach ($category as $cate) {
	?>	
	<?php echo '<hr><a href="index.php?controller=forum&action=pageTitle&id='.$cate->category_id.'"><strong>' . $cate->category_name . '</strong></a><hr>';
	 ?>
	<?php
	}
	?>
	</div>
	<div class="col-sm-4"">
		<div class="container-fluid" style="background-color: whitesmoke">
			<h2 style="text-align: center;">Bài viết mới nhất</h2>
		</div>
	</div>
</div>
<?php 
	/*echo '<ul class="list-group list-group-flush">';
	foreach ($category as $cate) {

	  echo '<li class="list-group-item">
	    		<a href="index.php?controller=forum&action=pageTitle&id='.$cate->category_id.'"><strong>' . $cate->category_name . '</strong></a>
	    		<br>
	  		</li>';
	}
	echo '</ul>';*/
 ?>
