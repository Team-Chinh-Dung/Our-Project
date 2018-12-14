<?php 
	require_once('controllers/base_controller.php');
	require_once 'models/user.php';
	require_once 'config/core.php';

	class DetailController extends BaseController
	{
	  	function __construct()
	  	{
	    	$this->folder = 'information';
	  	}

	  	public function personalDetail()
	  	{
	  		$detail = User::readDetail($_SESSION['user_id']);
	  		$data = array('detail' => $detail);
	  		$this->render('personal_detail', $data);    	    		
    				
	  	}
	}

 ?>