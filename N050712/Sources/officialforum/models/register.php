<?php 
require_once 'config/database.php';
include_once "models/user.php";
require_once 'libs/php/utils.php';
require_once 'config/core.php';
class M_Register
{
	
	public function f_register()
	{			
		// if form was posted
		if($_POST){
		 
		    // get database connection
		    $database = new Database();
		    $db = $database->getConnection();
		 
		    // initialize objects
		    $user = new User($db);
		    $utils = new Utils();
		 
		    // set user email to detect if it already exists
		    $user->email=$_POST['email'];
		 
		    // check if email already exists
		    if($user->emailExists()){
		        echo "<div class='alert alert-danger'>";
		            echo "The email you specified is already registered. Please try again or <a href='index.php?controller=access&action=login'>login.</a>";
		        echo "</div>";
		    }
		 
		    else{
		        // set values to object properties
				$user->firstname=$_POST['firstname'];
				$user->lastname=$_POST['lastname'];
				$user->contact_number=$_POST['contact_number'];
				$user->address=$_POST['address'];
				$user->password=$_POST['password'];
				$user->access_level='Customer';
				$user->status=0;

		        // access code for email verification
		        $access_code=$utils->getToken();
		        $user->access_code=$access_code;
				 
				// create the user
		        
		        if($user->create()){
		         
		            //send confimation email
		            $send_to_email=$_POST['email'];
		            
		            $body="Hi {$send_to_email}.<br /><br />";
		            $body.="Please click the following link to verify your email and login: http://localhost/officialforum/models/verify.php/?access_code={$access_code}";
		            $subject="Verification Email";
		            require_once 'libs/PHPMailer/index.php';
		        }else{
		            echo "<div class='alert alert-danger' role='alert'>Unable to register. Please try again.</div>";
		        }
		        
		    }
		}
	}
}
 ?>