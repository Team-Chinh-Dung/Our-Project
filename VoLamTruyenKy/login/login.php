<!DOCTYPE html>
<?php 
	if(isset($_POST['login_btn']))
	{

		$username = $_POST['username'];
		$password = $_POST['password'];

		session_start();
		$_SESSION['user'] = $username;

		$conn = new mysqli('localhost', 'root', '123456') or die(mysqli_error());
		$db = mysqli_select_db($conn, 'volamtruyenky') or die("DB Error");

		$sql = "SELECT * FROM user WHERE username = '".$username."' AND password = '".$password."' limit 1";
		$result = mysqli_query($conn, $sql);

		$numrows = mysqli_num_rows($result);
		if($numrows == 1){
			//Chuyển hướng trang 			
			header('location:http://localhost/VoLamTruyenKy/login/personal_information.php');
		}else{
			header('location:http://localhost/VoLamTruyenKy/login/login.php');
		}
	}
 ?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="login.css">
   		<meta charset="UTF-8">
	</head>
	<body>
		<div>
			<form class="form" method="POST" action="login.php">
				<div>
					<h2>Hệ thống đăng nhập</h2>
				</div>
				<div class="input">
					<input type="text" name="username" placeholder="Tài khoản">
				</div>
				<div class="input">
					<input type="password" name="password" placeholder="Mật khẩu">
				</div>
				<div class="input">
					<button type="submit" name="login_btn">Đăng nhập</button>					
					<button type="reset">Reset</button>										
				</div>
			</form>
		</div>
	</body>
</html>