<?php 
	require_once '../../config/database.php';
	require_once '../../models/category.php';
	$database = new Database();
    $db = $database->getConnection();
	if (isset($_POST['id'])) {
		$category = new Category($db);		
		$id = $_POST['id'];		
		if ($category->delete($id)) {
			echo '<div class="alert alert-success">
  					<strong>Đã xóa chuyên mục thành công!</strong>
				</div>';
		}
	}
 ?>