<?php 
	require_once '../../config/database.php';
	require_once '../../models/category.php';
	$database = new Database();
	$db = $database->getConnection();
	$category = new Category($db);		
	if ($_POST) {
		$category->category_name = $_POST['category'];
		if ($category->category_name != null || $category->category_name != '') {
			$category->create();
			echo '<div class="alert alert-success">
  					<strong>Đã thêm chuyên mục thành công!</strong>
				</div>';
		}
		if ($category->category_name == null || $category->category_name == '') {
			echo '<div class="alert alert-danger">
  				<strong>Bạn chưa nhập tên chuyên mục!</strong>
			</div>';
		}		
	}
 ?>