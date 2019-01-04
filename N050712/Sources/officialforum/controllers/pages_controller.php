<?php 
  require_once('controllers/base_controller.php');
  include_once 'models/post.php';
  include_once 'models/category.php';

  class PagesController extends BaseController
  {
    	function __construct()
    	{
      	$this->folder = 'pages';
    	}

    	public function home()
    	{
        $homeContent = Post::showHomeContent();
        $homeTitle = Post::showHomeTitle();
        $readAnswerQuestion = Post::readAnswerQuestion();
        $data = array('homeContent' => $homeContent, 
        'homeTitle' =>$homeTitle,
        'readAnswerQuestion' =>$readAnswerQuestion);
      	$this->render('home', $data);
    	}

    	public function error()
    	{
      	$this->render('error');
    	}
      public function terms(){
        $this->render('terms_of_use');
      }
}
 ?>