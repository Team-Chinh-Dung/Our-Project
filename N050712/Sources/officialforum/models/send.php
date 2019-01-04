<?php 
class Send
{	
	public function sendPost($id){
		if ($_POST) {
			$database = new Database();
			$db = $database->getConnection();
			$post = new Post($db);		
			$post->id = $_SESSION['user_id'];
			$post->category_id = $_POST['category_id'];
			$post->post_title = $_POST['post_title'];
			$post->post_content = $_POST['post_content'];

			// $filename = $_FILES["uploadfile"]["name"];
			// $tempname = $_FILES["uploadfile"]["tmp_name"];
			// $folder = "libs/uploads/".$filename;
			// move_uploaded_file($tempname, $folder);
			// $post->post_image = $folder;
			// $post->create();

			if (isset($_POST['submit'])) {			
				$filename = $_FILES["uploadfile"]["name"];
				$tempname = $_FILES["uploadfile"]["tmp_name"];
				$folder = "libs/uploads/".$filename;
				move_uploaded_file($tempname, $folder);
				$post->post_image = $folder;
				$post->create();
			}else{
				$post->create();
			}
			echo "<meta http-equiv='refresh' content='0'>";
		}
	}
	public function sendComment($id){
		if ($_POST) {
			$database = new Database();
			$db = $database->getConnection();
			$comment = new Comment($db);
			$comment->id = $_SESSION['user_id'];
			$comment->post_id = $_POST['post_id'];
			$comment->comment_content = $_POST['comment_content'];
			$comment->create();
			echo "<meta http-equiv='refresh' content='0'>";
		}
	}
}
 ?>