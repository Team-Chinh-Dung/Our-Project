<?php 
	include_once '../config/database.php';
	include_once '../config/core.php';
	include_once '../models/comment.php';
	$database = new Database();
	$db = $database->getConnection();
	if (isset($_POST['id'])) {
		$id=$_POST['id'];
		$name=$_POST['name'];
		
		$query = "UPDATE comments SET $name=$name+1 WHERE comment_id = '$id'";
		$stmt = $db->prepare($query);
		$stmt->execute();

		$query_like = "SELECT comment_like FROM comments WHERE comment_id ='$id'";
		$stmt = $db->prepare($query_like);
		$stmt->execute();
		$like = $stmt->fetch();
		echo  $like['comment_like'];
	}
 ?>