<!DOCTYPE html>
<?php 
	if(isset($_POST['submit']))
	{
		$password = $_POST['password'];

		$conn = new mysqli('localhost', 'root', '123456') or die(mysqli_error());
		$db = mysqli_select_db($conn, 'volamtruyenky') or die("DB Error");

		session_start();
    	$username = $_SESSION['user'];

    	$sql = "UPDATE user SET password = '".$password."' WHERE username = '".$username."'";
    	$result = mysqli_query($conn, $sql);
	}
 ?>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="http://localhost/VoLamTruyenKy/homepage/Homepage.html">Trang chủ</a>
	<form method="POST" action="change_password.php">
		<div>
			<h2>Thông tin cập nhật</h2>

		</div>
		<div>
			<label>Mật khẩu mới</label>
			<input type="password" name="password">
			<button type="submit" name="submit">Thay đổi</button>
		</div>
	</form>
</body>
</html>