<!DOCTYPE html>
<?php 
    $conn = new mysqli('localhost', 'root', '123456') or die(mysqli_error());
    $db = mysqli_select_db($conn, 'volamtruyenky') or die("DB Error");
    //sử dụng biến tạm của .php trước
    session_start();
    $username = $_SESSION['user'];

    $sqluser = "SELECT * FROM user WHERE username = '".$username."'";
    $resultuser = mysqli_query($conn, $sqluser);

    $row = mysqli_num_rows($resultuser);
    $row = $resultuser->fetch_assoc();
    //mysqli_fetch_assoc();
    $user = $row['username'];
    $pass = $row['password'];
    $email = $row['email'];
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="personal_information.css">
   		<meta charset="UTF-8">
    </head>
    <body>
        <form method="POST" action="personal_information.php">
            <div class="header">
            <h2>Thông tin cá nhân</h2>           
        </div>
        <div class="sidebar">
            <p>I love you</p>
        </div>
        <div>
            <table>
                <tr>
                    <td>Tên đăng nhập: </td>
                    <td><?php echo $user ?></td>
                    
                </tr>
                <tr>
                    <td>Mật khẩu: </td>
                    <td><?php echo $pass ?></td>
                </tr>
                <tr>
                    <td>Email: </td>
                    <td><?php echo $email ?></td>
                </tr>
            </table>
        </div>
        </form>
    </body>
</html>