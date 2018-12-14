<?php 
	$page_title = 'Diễn đàn';
 ?>
<?php 
	echo '<ul>';
	foreach ($category as $cate) {
	  echo '<li>
	    		<a href="index.php?controller=forum&action=pageTitle&id='.$cate->category_id.'"><strong>' . $cate->category_name . '</strong></a>
	  		</li>';
	}
	echo '</ul>';
?>

