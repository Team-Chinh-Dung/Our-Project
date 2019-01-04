<?php 
  require_once('controllers/base_controller.php');
  require_once '../models/post.php';
  require_once '../models/category.php';
  require_once '../models/user.php';
  require_once '../models/comment.php';

  class PagesController extends BaseController
  {
    	function __construct()
    	{
      	$this->folder = 'pages';
    	}

    	public function home()
    	{
        $countComments = Comment::countComments();
        $countCategories = Category::countCategories();
      	$countPosts = Post::countPosts();
        $countUsers = User::countUsers();
        $data = array('countPosts' => $countPosts,
         'countUsers' => $countUsers,
         'countCategories' =>$countCategories,
         'countComments' => $countComments);
      	$this->render('home', $data);
    	}
    	public function error()
    	{
      	$this->render('error');
    	}
}
 ?>