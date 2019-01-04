<?php 
require_once '../../config/database.php';
	require_once '../../models/user.php';
	$database = new Database();
	$db = $database->getConnection();
	$record_per_page = 3;
	print_r($_POST);
	$page='';
	$output='';
	if (isset($_POST["page"])) {
		$page=$_POST["page"];
	}
	else{
		$page=1;
	}
	$start_from=($page-1)*$record_per_page;
	$query="SELECT * FROM users LIMIT $start_from, $record_per_page";
	$stmt = $db->prepare($query);
	$stmt->execute();
	$output.= "<table class='table table-hover table-responsive table-bordered'>
			<tr>
				<th>Tên</th>
				<th>Họ và đệm</th>
				<th>Email</th>
				<th>Số điện thoại</th>
				<th>Địa chỉ</th>
				<th>Quyền truy cập</th>
				<th>Ngày tạo</th>
				<th>Sửa</th>
				<th>Xóa</th>
			</tr>
			";
	while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		echo '<tr id='.$row['id'].'>
					<td data-target="firstname">'.$row['firstname'].'</td>
					<td data-target="lastname">'.$row['lastname'].'</td>
					<td data-target="email">'.$row['email'].'</td>
					<td data-target="contact_number">'.$row['contact_number'].'</td>
					<td data-target="address">'.$row['address'].'</td>
					<td data-target="access_level">'.$row['access_level'].'</td>
					<td>'.$row['created'].'</td>
					<td><a href="#" data-role="update" data-id="'.$row['id'].'">Sửa</a></td>
					<td><a href="#" data-role="delete" data-id="'.$row['id'].'">Xóa</a></td>
			</tr>';
	}
	$output.='</table><br><div align="center">';
	$page_query = "SELECT * FROM users ORDER BY id DESC";
	$stmt = $db->prepare($page_query);
	$stmt->execute();
	$total_records = $stmt->rowCount();
	
	$total_pages = ceil($total_records/$record_per_page);
	for($i=1;$i<=$total_pages;$i++){
		$output.="<span class='pagination_link' style='cursor:pointer;' id='".$i."' >".$i."</span> ";
	}
	echo $output;
 ?>