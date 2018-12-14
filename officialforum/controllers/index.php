<?php
// core configuration
include_once "../config/core.php";
// include login checker
$require_login=true;
include_once "login_checker.php";

header('location: ../index.php?controller=forum&action=forum');
/*echo "<div class='col-md-12'>";
 
    // to prevent undefined index notice
    $action = isset($_GET['action']) ? $_GET['action'] : "";
 
    // if login was successful
    if($action=='login_success'){
        echo "<div class='alert alert-info'>";
            
            
            echo "<strong>Xin chào " . $_SESSION['firstname'] . ", đã quay trở lại!</strong>";
        echo "</div>";
    }
 
    // if user is already logged in, shown when user tries to access the login page
    else if($action=='already_logged_in'){
        echo "<div class='alert alert-info'>";
            echo "<strong>Bạn đã đăng nhập thành công.</strong>";
        echo "</div>";
    }
    
    else if($action=='please_login'){
        echo "<div class='alert alert-info'>
            <strong>Đăng nhập để truy cập trang.</strong>
        </div>";
    }

    // content once logged in
    echo "<div class='alert alert-info'>";
        echo "Nội dung khi đăng nhập thành công.";
        //include_once '../content/index.php';
    echo "</div>";
 
echo "</div>";
 
// footer HTML and JavaScript codes
*/
?>