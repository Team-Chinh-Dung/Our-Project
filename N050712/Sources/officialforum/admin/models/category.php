<?php 
	require_once '../../config/database.php';
	require_once '../objects/category.php';
	$database = new Database();
	$db = $database->getConnection();

	$category = new Category($db);
	$stmt = $category->showAll();
	echo "<table class='table table-bordered'>
 			<tr>
 				<th>ID</th>
 				<th>Name</th>
 			</tr>";
	while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		echo "<tr>
 				<td>".$row['category_id']."</td>
 				<td>".$row['category_name']."</td>
 			</tr>";
 		
	}
	echo "</table>";

	if ($_POST) {
		$category->category_name = $_POST['category'];
		$category->insert();
	}
 ?>