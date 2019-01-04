<?php 
	require_once '../../config/database.php';
	require_once '../../models/user.php';
	$database = new Database();
	$db = $database->getConnection();	
	if (isset($_POST['email'])) {
		$user = new User($db);		
		$user->firstname = $_POST['firstname'];
		$user->lastname = $_POST['lastname'];
		$user->email = $_POST['email'];
		$user->contact_number = $_POST['contact_number'];
		$user->address = $_POST['address'];
		$user->access_level = $_POST['access_level'];
		$id = $_POST['id'];
		$user->update($id);
	}
 ?>