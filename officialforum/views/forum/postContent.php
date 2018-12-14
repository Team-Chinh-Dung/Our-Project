<?php 
	$page_title = 'Nội dung bài viết';
	echo "$content->post_content";

	echo '<ul>';
	echo "<strong>Bình luận</strong>";
	foreach ($comment as $c) 
	{		
	  	echo '<li>';
	    		echo $c->comment_content.'<br>';
	    		foreach ($username as $u) {
	    			if ($c->comment_content == $u[1]) {
	    				echo $u[0];
	    			}
	    		}
	    		echo '<br>'.$c->comment_created;
	  	echo '</li>';
	}
	echo '</ul>';
 ?>
 <form method="post">
 	<div>
 		<?php echo $_SESSION['firstname']; ?>
 		<input type="text" name="post_id" value="<?php echo "$content->post_id"; ?>" style="width: 40px;height: 5px;float:right;text-align:right;border-style: none;">
 		<textarea class="form-control" rows="1" name="comment_content" placeholder="Bình luận..." required></textarea>
 	</div>
 	<div class="modal-footer">					
 		<button type="submit" class="btn btn-primary" style="width: auto;">Đăng</button>
 	</div>
 </form>