<?php 
	require_once('controllers/base_controller.php');
	//require_once 'config/core.php';
	//include_once 'config/database.php';
	require_once 'models/category.php';
	require_once 'models/post.php';
	require_once 'models/comment.php';
	require_once 'models/send.php';
	include_once 'models/paging_objects.php';
	class ForumController extends BaseController
	{
	  	function __construct()
	  	{
	    	$this->folder = 'forum';
	  	}

	  	public function forum(){ 
	  		$category = Category::readCategories();
	  		$readNewPosts = Post::readNewPosts();
	  		$data = array('category' => $category,
	  		 	'readNewPosts' => $readNewPosts);
			$this->render('forum',$data);	
	  	}
	  	public function pageTitle(){
	  		$category = Category::readCategory($_GET['id']);
	  		$post = Post::readPost_Category($_GET['id']);
	  		$username = Post::readUser($_GET['id']);
	  		
	  		$data = array('category' => $category,
	  		 'post' => $post,
	  		  'username' => $username);
	  		$this->render('pageTitle',$data);

	  		$sendpost = new Send();
	  		$sendpost->sendPost($_GET['id']);
	  	}
	  	public function postContent(){
	  		$postContent = Post::readContent($_GET['id']);
	  		$comment = Comment::readComment($_GET['id']);
	  		$username = Comment::readUser($_GET['id']);
	  		$data = array('content' => $postContent,
	  		 'comment' => $comment,
	  		  'username' => $username);
	  		$this->render('postContent',$data);

	  		$sendcomment = new Send();
	  		$sendcomment->sendComment($_GET['id']);
	  	}
	}

 ?>