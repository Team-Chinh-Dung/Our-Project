<?php 
/**
 * 
 */
class M_sendComment
{	
	public function f_sendComment($id)
	{
		if ($_POST) {
		$commentId = $_SESSION['user_id'];
		$commentPost_id = $_POST['post_id'];
		$commentComment_content = $_POST['comment_content'];
		$comment = new Comment($commentId, $commentPost_id, $commentComment_content, null,null);
			if ($comment->create()) {
				echo "<div class='alert alert-success' role='alert'>Đăng bài thành công.</div>";
			}else{
				echo "<div class='alert alert-danger' role='alert'>Đăng bài thất bại.</div>";
			}
			echo "<meta http-equiv='refresh' content='0'>";//refresh current page after submit
		}
	}
}

 ?>