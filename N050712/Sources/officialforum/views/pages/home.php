<?php 
	$page_title = 'Trang chủ';
?>
<div style="background-color: black">
	<div class="container-fluid">
		<div class="row">
			<?php foreach ($homeTitle as $homeT) {
				$idT = $homeT[0];
				$titleT = $homeT[1];
				$contentT = $homeT[2];
				$imageT = $homeT[3];
				$createdT = $homeT[4] ?>
				<a style="text-decoration: none; color: white" href="index.php?controller=forum&action=postContent&id=<?php echo $idT; ?>">
					<div class="col-sm-6" style="padding: 5px">
						<img class="img-responsive" src="<?php echo $imageT; ?>">
						<h4><?php echo $titleT; ?></h4>
						<strong>Người đăng: Dũng</strong>
						<p style="color: green;"><small ><?php echo $createdT; ?></small></p>
					</div>
				</a>								
			<?php } ?>
		</div>
	</div>
</div>
<br>
<div class="container-fluid">
	<div class="row">		
		<div class="col-sm-8">
			<div class="panel panel-default"> 				
  				<div class="panel-body">
					<?php foreach ($homeContent as $homeC) {
					$idC = $homeC[0];
					$titleC = $homeC[1];
					$contentC = $homeC[2];
					$imageC = $homeC[3]; ?>
					<div class="container-fluid">
						<div class="col-sm-4">
							<img class="img-responsive" src="<?php echo $imageC; ?>" >
						</div>
						<div class="col-sm-8" id="home_content">
							<a style="text-decoration: none;" href="index.php?controller=forum&action=postContent&id=<?php echo $idC; ?>"><h4 style="color: black"><strong><?php echo $titleC; ?></strong></h4></a>
							<p>Người đăng: Tiến</p>
							<p><?php echo $contentC; ?></p>
						</div>
					</div>
					<hr>
				<?php } ?>
  				</div>
			</div>			
		</div>		
		<div class="col-sm-4">
			<div class="panel panel-default">
			  	<div class="panel-heading"><h4>JavaScript</h4></div>
			  	<div class="panel-body">
				<?php 
					foreach ($readAnswerQuestion as $readAnswerQuestion) {
						$AQ_post_id = $readAnswerQuestion[0];
						$AQ_post_title = $readAnswerQuestion[1];
						$AQ_post_content = $readAnswerQuestion[2];
						$AQ_post_image = $readAnswerQuestion[3];
						$AQ_category_id = $readAnswerQuestion[4];
				?>
					<div class="row">
						<div class="col-sm-12">
							<a href="index.php?controller=forum&action=postContent&id=<?php echo $AQ_post_id?>">
								<strong><?php echo $AQ_post_title ?></strong>

							</a>
							<p>Người đăng : Dũng</p>
							<hr>
						</div>
					</div>
				<?php
					}
				 ?>
			  	</div>
			</div>
		</div>			
	</div>
</div>
