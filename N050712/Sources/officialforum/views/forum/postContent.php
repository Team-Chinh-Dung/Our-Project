<div class="row">
	<div class="col-sm-12">
		<?php $page_title = 'Nội dung bài viết'; ?>
	</div>
</div>
<!-- Phần nội dung và bình luận -->
<div class="row">
	<div class="col-sm-8 sha">
		<div class="row">		
			<div class="col-sm-12">	
				<?php 
					$post_id = $content[0];
					$category_id = $content[2];
					$post_title = $content[3];
					$image = $content[7];
					$post_content = $content[4];
					$post_created = $content[5];
				?>
				<div class="panel panel-default">
				  	<div class="panel-heading"><?php echo "<div>Người đăng : Chính</div><small>$post_created</small>"; ?></div>
				  	<div class="panel-body">
				  		<?php
							echo "<h2>$post_title</h2>";	
							if ($image == null) {
								echo '';						
							}else{
								echo "<img src=".$image." class='img-responsive'>";
							}
							echo "<p class='post_content'>$post_content</p>";
						?>	
				  	</div>
				</div>
				
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">					
				<?php											
					foreach ($comment as $comment) 
						{
							$comment_id = $comment[0];
								$id = $comment[1];
								$comment_content = $comment[3];
								$comment_created = $comment[4];
								$comment_like = $comment[6];
						?>
						<div class="panel panel-default">
				 			<div class="panel-heading">
								<?php foreach ($username as $user) {
									if ($comment_content == $user[1]) {
										echo '<strong style="color:green">'.$user[0].'</strong>';
									}
								}
								?>
								<?php echo '<small>'.$comment_created.'</small>'; ?>						
							</div>
				  	<div class="panel-body">													
						<?php echo $comment_content; ?>							
					</div>
				</div>
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
					 			<input type="hidden" name="post_id" value="<?php echo "$post_id"; ?>">
					 		</div>
					 		<div class="col-sm-12">
					 			<textarea class="form-control" rows="1" name="comment_content" placeholder="Trả lời..." required></textarea>
					 		</div>
					 	</div>
					 	<div class="modal-footer">					
					 		<button type="submit" class="btn btn-primary" style="width: auto;">Đăng</button>
					 	</div>
					</form>
					<?php 
					}else{
						echo "<a href='index.php?controller=access&action=login'>Đăng nhập để trả lời</a>";
					}
					?>			
			</div>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="row ">
			<div class="panel panel-default">
    			<div class="panel-body">
    				<a href="https://stackoverflow.com/">
    					<img class='img-responsive' src="libs/stack-overflow.png" alt="StackOverFlow">
    				</a>
    				<a href="https://www.quora.com/">
    					<img class='img-responsive' src="libs/quora.jpg" alt="Quora">
    				</a>
    			</div>
 		 	</div>
		</div>
	</div>	
</div>