<?php 
	require_once('controllers/base_controller.php');
	require_once '../models/user.php';
	require_once '../config/core.php';
	/**
	 * 
	 */
	class UsersController extends BaseController
	{
		
		function __construct()
		{
			$this->folder = 'users';
		}
		public function personal_detail(){
			$detail = User::readDetail($_SESSION['user_id']);
			$data = array('detail' => $detail);
			$this->render('personal_detail',$data);
		}
		public function users_detail(){		
			$detail = User::readUsers();
			$data = array('detail' => $detail);
			$this->render('users_detail', $data);
		}
	}
 ?>