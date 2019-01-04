<?php
// core configuration
include_once "../config/core.php";
// include login checker
$require_login=true;
include_once "login_checker.php";
header("Location: {$home_url}index.php?controller=pages&action=home");
?>