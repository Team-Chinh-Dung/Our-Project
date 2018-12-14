<?php 
	require_once('controllers/base_controller.php');
	require_once 'models/login.php';
	require_once 'models/register.php';
	require_once 'config/core.php';

	class AccessController extends BaseController
	{
	  	function __construct()
	  	{
	    	$this->folder = 'access';
	  	}

	  	public function login()
	  	{
	  		$login = new M_Login();
	  		$login->f_login();
	  		$this->render('login');    	    		
    				
	  	}
	  	public function register()
	  	{
	  		$register = new M_Register();
	  		$register->f_register();
	  		$this->render('register');
	  	}	  	
	}

 ?>