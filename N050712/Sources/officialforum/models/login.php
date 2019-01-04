<?php 
	class M_Login
	{	

		function f_login()
		{
			$require_login=false;
			//include_once "login_checker.php"; 
			// default to false
			$access_denied=false;
			 
			// if the login form was submitted
			if($_POST){
			    // include classes
				//include_once "config/database.php";
				
				 
				// get database connection
				$database = new Database();
				$db = $database->getConnection();
				 
				// initialize objects
				$user = new User($db);
				 
				// check if email and password are in the database
				$user->email=$_POST['email'];
				 
				// check if email exists, also get user details using this emailExists() method
				$email_exists = $user->emailExists();
				 
				// validate login
				if ($email_exists && password_verify($_POST['password'], $user->password) && $user->status==1){
				 
				    // if it is, set the session value to true
				    $_SESSION['logged_in'] = true;
				    $_SESSION['user_id'] = $user->id;
				    $_SESSION['access_level'] = $user->access_level;
				    $_SESSION['firstname'] = htmlspecialchars($user->firstname, ENT_QUOTES, 'UTF-8') ;
				    $_SESSION['lastname'] = $user->lastname;
				 
				    // if access level is 'Admin', redirect to admin section
				    if($user->access_level=='Admin'){
				        header("Location: {$home_url}admin/index.php");
				    }
				 
				    // else, redirect only to 'Customer' section
				    else{
				        header("Location: {$home_url}index.php?action=forum&action=forum");
				    }
				}
				 
				// if username does not exist or password is wrong
				else{
				    $access_denied=true;
				}				
			}
			
			$action=isset($_GET['action']) ? $_GET['action'] : "";
            // tell the user he is not yet logged in
            if($action =='not_yet_logged_in'){
                echo "<div class='alert alert-danger margin-top-40' role='alert'>Please login.</div>";
            }
             
            // tell the user to login
            else if($action=='please_login'){
                echo "<div class='alert alert-info'>
                    <strong>Đăng nhập để truy cập trang.</strong>
                </div>";
            }
             
            // tell the user if access denied
            if($access_denied){
     //        	echo "<div class='col-sm-6 col-md-4 col-md-offset-4'>
					// 	<div class='alert alert-danger margin-top-10' role='alert'>
     //                		Email hoặc mật khẩu của bạn đã bị sai
     //                	</div>
					// </div>";
                echo " <script> alert('Email hoặc mật khẩu của bạn đã bị sai! Vui lòng thử lại.') </script>";
            }
		}
	}
	
		
 ?>