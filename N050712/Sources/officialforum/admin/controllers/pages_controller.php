<?php 
  require_once('controllers/base_controller.php');

  class PagesController extends BaseController
  {
    	function __construct()
    	{
      	$this->folder = 'pages';
    	}

    	public function home()
    	{
      	$data = array(
        	'name' => 'Admin',
        	'age' => 18);
      	$this->render('home', $data);
    	}

    	public function error()
    	{
      	$this->render('error');
    	}
}
 ?>