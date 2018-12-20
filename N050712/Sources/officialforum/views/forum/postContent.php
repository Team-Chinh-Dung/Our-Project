<?php 
	$page_title = 'Nội dung bài viết';
	echo "<p class='post_content'>$content->post_content</p>";
	
	echo "<hr>";
	echo "<div>
		<strong>Bình luận</strong>
	</div><br>";
	foreach ($comment as $c) 
	{	
?>
	<div class="row form" >
		<div class="col-sm-1 col">
			<?php foreach ($username as $u) {
	    			if ($c->comment_content == $u[1]) {
	    				echo '<strong style="color:green">'.$u[0].'</strong>';
	    			}
	    		}
	    	?>
		</div>
		<div class="col-sm-11 col">
			<?php echo '<small>'.$c->comment_created.'</small>'; ?>
		</div>

		<div class="col-sm-12 col">
			<?php echo $c->comment_content; ?>
		</div>
	</div>
	<br>
<?php
	} 
 ?>

 <?php
 	if (isset($_SESSION['user_id'])) {
 	 	//Nếu có SESSION thì bình luận	  
  ?>
 <form method="post" class="form" style="background-color: white">
 	<div class="row">
 		<div class="col-sm-10">
 			<?php echo $_SESSION['firstname']; ?>
 		</div>
 		<div class="col-sm-2">
 			<input type="text" name="post_id" value="<?php echo "$content->post_id"; ?>" style="width: 40px;height: 5px;float:right;text-align:right;border-style: none;color: whitesmoke">
 		</div>
 		<div class="col-sm-12">
 			<textarea class="form-control" rows="1" name="comment_content" placeholder="Bình luận..." required></textarea>
 		</div>
 	</div>
 	<div class="modal-footer">					
 		<button type="submit" class="btn btn-primary" style="width: auto;">Đăng</button>
 	</div>
 </form>
 <?php 
}else{
	echo "<a href='index.php?controller=access&action=login'>Đăng nhập để bình luận</a>";
}
  ?>
