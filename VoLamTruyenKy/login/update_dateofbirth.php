<!DOCTYPE html>
<?php 
	if(isset($_POST['update_dob']))
	{
		$dateofbirth = $_POST['dateofbirth'];

		$conn = new mysqli('localhost', 'root', '123456') or die(mysqli_error());
		$db = mysqli_select_db($conn, 'volamtruyenky') or die("DB Error");

		session_start();
    	$username = $_SESSION['user'];

    	$sql = "UPDATE user SET dateofbirth = '".$dateofbirth."' WHERE username = '".$username."'";
    	$result = mysqli_query($conn, $sql);
	}
 ?>
<html>
	<head>
		<h2>Cập nhật</h2>
		<link rel="stylesheet" type="text/css" href="update.css">
   		<meta charset="UTF-8">
	</head>
	<body>
		<a href="http://localhost/VoLamTruyenKy/homepage/Homepage.html">Trang chủ</a>
		<form method="POST" action="update_dateofbirth.php">
			<div class="nav">
				<h3>VNG</h3>
			</div>
			<div>
				<label>Cập nhật ngày sinh</label>
				<input type="date" name="dateofbirth">
				<button type="submit" name="update_dob">Cập nhật</button>
			</div>
		</form>
	</body>
</html>