<div class="row">
	<div class="col-sm-12">
		<?php
			$page_title = 'Diễn đàn';
 		?>
	</div>
</div>
<div class="row">
	<div class="col-sm-8 shad">
		<div class="panel panel-default">
		  	<div class="panel-heading">
		  		<h4>Lập trình Web</h4>
		  		<small>Nơi chia sẻ kiến thức lập trình web</small>
		  	</div>
		  	<div class="panel-body">
		  		<?php 
					foreach ($category as $cate) {
						$category_id = $cate[0];
						$category_name = $cate[1];
						echo '<a href="index.php?controller=forum&action=pageTitle&id='.$category_id.'"><strong>'.$category_name.'</strong></a><br><small>Bài viết:2</small><hr>';
					}
				?>
		  	</div>
		</div>
	</div>
	<div class="col-sm-4 shad">
			<div class="panel panel-default">
				<div class="panel-heading" style="text-align: center;"><h3>Bài viết mới nhất</h3></div>
				<div class="panel-body">
					<?php foreach ($readNewPosts as $NewPosts) {
						$newPostsID = $NewPosts[0];
						$newPostsTitle = $NewPosts[1];
						$newPostsContent = $NewPosts[2];
						$newPostsCreated = $NewPosts[4];
					 ?>
					<div>
						<a href="index.php?controller=forum&action=postContent&id=<?php echo $newPostsID ?>"><?php echo $newPostsTitle; ?></a><br>
						<small>Người đăng: Thắm</small><br>
						<small><?php echo $newPostsCreated; ?></small>
					</div>
					<br>
					<?php } ?>
				</div>
			</div>			
	</div>
</div>
<!-- <a href='index.php?controller=pages&action=terms'><strong><h4>Điều khoản sử dụng của diễn đàn</h4></strong></a> -->