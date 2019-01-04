<?php 
	require_once '../../config/database.php';
	require_once '../../models/user.php';
	$database = new Database();
	$db = $database->getConnection();
	if (isset($_POST['id'])) {
		
		$id = $_POST['id'];
		$user = new User($db);
		$user->delete($id);
	}
 ?>