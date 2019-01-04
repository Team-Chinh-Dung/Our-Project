<?php 
	require_once '../../config/database.php';
	require_once '../../models/category.php';
	$database = new Database();
	$db = $database->getConnection();	
	if (isset($_POST['category_name'])) {
		$category = new Category($db);
		$category->category_name = $_POST['category_name'];
		$id = $_POST['category_id'];
		if ($category->update($id)) {
			echo '<div class="alert alert-success">
  					<strong>Đã sửa chuyên mục thành công!</strong>
				</div>';
		}
	}
 ?>