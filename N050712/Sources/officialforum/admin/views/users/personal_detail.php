<?php 
	$page_title = 'Thông tin cá nhân';
 foreach ($detail as $detail) {
?>	
	<div class="col-sm-3">
		
	</div>
	<div class="col-sm-6">
		<table class="table table-borderless">
		<tr>
			<td>Tên</td>
			<td><?php echo $detail[0]; ?></td>
		</tr>
		<tr>
			<td>Họ và đệm</td>
			<td><?php echo $detail[1]; ?></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><?php echo $detail[2]; ?></td>
		</tr>
		<tr>
			<td>Số điện thoại</td>
			<td><?php echo $detail[3]; ?></td>
		</tr>
	</table>
	</div>
<?php				
	}
 ?>