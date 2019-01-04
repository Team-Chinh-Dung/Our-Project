<?php 
	require_once 'config/database.php';
	require_once 'config/core.php';

	if (isset($_GET['controller'])) {
	  	$controller = $_GET['controller'];
	  	if (isset($_GET['action'])) {
	    	$action = $_GET['action'];
	  	} else {
	    	$action = 'index';
	  	}
	} else {
	 	$controller = 'forum';
	  	$action = 'forum';
	}
	require_once('routes.php');
 ?>