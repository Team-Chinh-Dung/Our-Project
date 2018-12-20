<?php 
/**
 * 
 */
class M_sendPost
{
	public function f_sendPost($id)
	{
		if ($_POST) {		
		$postId = $_SESSION['user_id'];
		$postCategory_id = $_POST['category_id'];
		$postPost_title = $_POST['post_title'];
		$postPost_content = $_POST['post_content'];
		$post = new Post(null, $postId, $postCategory_id, $postPost_title, $postPost_content, null, null);
		$post->create();
		echo "<meta http-equiv='refresh' content='0'>";//refresh current page after submit
		}
	}
}
 ?>