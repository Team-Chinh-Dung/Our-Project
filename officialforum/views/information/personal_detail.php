<?php 
	$page_title = 'Thông tin cá nhân';
	foreach ($detail as $detail) {
		?>
		<p>Tên : <?php echo $detail[0]; ?></p>
		<p>Họ và đệm : <?php echo $detail[1]; ?></p>
		<p>Email : <?php echo $detail[2]; ?></p>
		<p>Số điện thoại : <?php echo $detail[3]; ?></p>
		<?php				
	}
 ?>