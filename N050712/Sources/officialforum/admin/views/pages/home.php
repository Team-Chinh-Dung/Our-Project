<?php 
	$page_title = 'Quản lý hệ thống';
?>
<div class="row" >
    <div class="col-sm-3">
        <div class="container-fluid">
            <div class="list-group">
                <a href="index.php?controller=pages&action=home" class="list-group-item active"><span class="glyphicon glyphicon-cog"></span>Quản lý hệ thống</a>
                <a href="index.php?controller=users&action=users_detail" class="list-group-item"><span class="glyphicon glyphicon-user"></span> Thành viên<span class="badge"><?php echo $countUsers; ?></span></a>
                <a href="index.php?controller=category&action=category" class="list-group-item"><span class="glyphicon glyphicon-menu-hamburger"></span> Chuyên mục<span class="badge"><?php echo $countCategories; ?></span></a>
                <p class="list-group-item"><span class="glyphicon glyphicon-pencil"></span> Bài viết<span class="badge"><?php echo $countPosts; ?></span></p>
                <p class="list-group-item"><span class="glyphicon glyphicon-comment"></span> Bình luận<span class="badge"><?php echo $countComments; ?></span></p>
            </div>
        </div>
    </div>
	<div class="col-sm-9">
		<div class="panel panel-default">
			<div class="panel-heading" id="panelheading">
				<h3 class="panel-title">Tổng quan</h3>
			</div>
			<div class="panel-body">
				<div class="col-md-3">
					<div class="well dash-box">
						<h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
						<?php echo $countUsers; ?></h2>
						<h4>Thành viên</h4>
					</div>
				</div>
				<div class="col-md-3">
					<div class="well dash-box">
						<h2><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
						<?php echo $countPosts; ?></h2>
						<h4>Bài viết</h4>
					</div>
				</div>
				<div class="col-md-3">
					<div class="well dash-box">
						<h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
						<?php echo $countCategories; ?></h2>
						<h4>Chuyên mục</h4>
					</div>
				</div>
				<div class="col-md-3">
					<div class="well dash-box">
						<h2><span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
						<?php echo $countComments; ?></h2>
						<h4>Bình luận</h4>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>