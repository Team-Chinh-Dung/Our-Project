
<!DOCTYPE html>
<?php 
    if(isset($_POST['reg_btn']))
    {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $conn = new mysqli('localhost', 'root', '123456') or die(mysqli_error());//Kết nối database
        $db = mysqli_select_db($conn, 'volamtruyenky') or die("DB Error");//select trong database

        $sql1 = "SELECT * FROM user WHERE username='".$username."'";//Câu lệnh truy vấn tìm thông tin theo tên điền vào
        $result1 = mysqli_query($conn, $sql1);//Truy vấn câu lệnh trên thông qua mysql

        $numrows = mysqli_num_rows($result1);//Trả về số cột đã có tên truyền vào
        if($numrows == 0){//Nếu tài khoản đó không có trong database
            $sql = "INSERT INTO user(username, email, password) VALUES('$username','$email','$password')";
            $result = mysqli_query($conn, $sql);
            if($result){
                echo "Thành công";
            }else{
                echo "Thất bại";
            }
        }else{
            echo "Tài khoản đã tồn tại. Đăng nhập lại";
        }
    }   
 ?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="register.css">
        <meta charset="UTF-8">
    </head>
    <body>
        <div>           
            <form class="form" method="POST" action="register.php">
                <div>
                    <h2>Hệ thống đăng ký</h2>
                </div>
                <div class="form_register">
                    <div>
                        <label>Tên đăng ký</label><br>
                        <input type="text" placeholder="Nhập tên" name="username">
                    </div>
                    <div>
                        <label>Email</label><br>
                        <input type="text" placeholder="Nhập Email" name="email">  
                    </div>
                    <div>
                        <label>Mật khẩu</label><br>             
                        <input type="password" placeholder="Nhập mật khẩu" name="password">
                    </div>         
                    <div class="submit">
                        <button type="submit" name="reg_btn">Đăng ký</button>
                    </div>                  
                </div>            
            </form>
        </div>
    </body>
</html>
