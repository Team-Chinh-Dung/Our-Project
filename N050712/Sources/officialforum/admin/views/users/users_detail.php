<?php 
	require_once 'models/user.php';

	$page_title = 'Thông tin người dùng';
	echo "<table class='table table-hover table-responsive table-bordered'>";
    // table headers
    echo "<tr>";
        echo "<th>Tên</th>";
        echo "<th>Họ và đệm</th>";
        echo "<th>Email</th>";
        echo "<th>Số điện thoại</th>";
        echo "<th>Địa chỉ</th>";
        echo "<th>Quyền truy cập</th>";        
        echo "<th>Ngày tạo</th>";
        echo "<th>Sửa</th>";
        echo "<th>Xóa</th>";
    echo "</tr>";
	foreach ($detail as $detail) {		
?>	
	<tr>
		<td><?php echo $detail[0]; ?></td>
		<td><?php echo $detail[1]; ?></td>
		<td><?php echo $detail[2]; ?></td>
		<td><?php echo $detail[3]; ?></td>
		<td><?php echo $detail[4]; ?></td>
		<td><?php echo $detail[5]; ?></td>
		<td><?php echo $detail[6]; ?></td>
		<td><button type="button" class="btn btn-outline-info">Sửa</button></td>
		<td><button type="button" class="btn btn-outline-danger">Xóa</button></td>
	</tr>
<?php					
	}
	echo "</table>";
 ?>
