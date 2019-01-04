<?php 
	$page_title = 'Thông tin cá nhân';
	foreach ($detail as $detail) {
		$firstname = $detail[0];
		$lastname = $detail[1];
		$email = $detail[2];
		$contact_number = $detail[3];
		$access_level = $detail[4];
?>	
	<div class="col-sm-6">
		<div class="panel panel-default">
			<div class="panel-heading" id="detail-User-Info">Thông tin</div>
    		<div class="panel-body">
    			<table class="table table-bordered">
					<tr>
						<td>Tên</td>
						<td><?php echo $firstname; ?></td>
					</tr>
					<tr>
						<td>Họ và đệm</td>
						<td><?php echo $lastname; ?></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><?php echo $email; ?></td>
					</tr>
					<tr>
						<td>Số điện thoại</td>
						<td><?php echo $contact_number; ?></td>
					</tr>
					<tr>
						<td>Quyền truy cập</td>
						<td><?php echo $access_level; ?></td>
					</tr>
				</table>
    		</div>
		</div>
	</div>
	<div class="col-sm-6">
		<div class="panel panel-default">
			<div class="panel-heading" id="detail-User-Post">Bài viết</div>
			<div class="panel-body"><h1><span class="glyphicon glyphicon-pencil"></span><?php echo $countPostsUser; ?></h1></div>
		</div>
	</div>
<?php				
	}
 ?>