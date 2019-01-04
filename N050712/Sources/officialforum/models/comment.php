<?php
class Comment
{
	private $conn;
	private $table_name = "comments";
	public $comment_id;	
	public $id;
	public $post_id;
	public $comment_content;
	public $comment_created;
	public $comment_modified;
	public $comment_like;

	function __construct($db){
		$this->conn = $db;
	}

	public function create(){
		$this->comment_created=date('Y-m-d H:i:s');
		$this->comment_like = 0;
		$query = "INSERT INTO ".$this->table_name."
		SET
		id = :id,
		post_id = :post_id,
		comment_content = :comment_content,
		comment_created = :comment_created,
		comment_like = :comment_like";

		$stmt = $this->conn->prepare($query);

		$stmt->bindParam(':id', $this->id);
		$stmt->bindParam(':post_id', $this->post_id);
		$stmt->bindParam(':comment_content', $this->comment_content);
		$stmt->bindParam(':comment_created', $this->comment_created);
		$stmt->bindParam(':comment_like', $this->comment_like);

		if ($stmt->execute()) {
			return true;
		}else{
			return false;
		}
	}

	public function updateLike($comment_content){
		$query = "UPDATE ".$this->table_name."
		SET
		comment_like = :comment_like++ WHERE comment_content = $comment_content";
		$stmt = $this->conn->prepare($query);
		$stmt->bindParam(':comment_like', $this->comment_like);
		if ($stmt->execute()) {
			return true;
		}else{
			return false;
		}
	}

	public function showError($stmt){
	    echo "<pre>";
	        print_r($stmt->errorInfo());
	    echo "</pre>";
   	}

   	public static function countComments(){
    	$database = new Database();
		$db = $database->getConnection();
		$query = "SELECT comment_id FROM comments";
		$stmt = $db->prepare($query);
		$stmt->execute();
		$countComments = $stmt->rowCount();
		return $countComments;
    }

   	public static function readComment($id){
   		$database = new Database();
		$db = $database->getConnection();
		$list = [];
   		$query = "SELECT * FROM comments WHERE post_id = :id ORDER BY comment_like DESC";
   		$stmt = $db->prepare($query);
   		$stmt->execute(array('id' => $id));
   		foreach ($stmt->fetchAll() as $i) {
   			$list[] = array($i['comment_id'],$i['id'], $i['post_id'], $i['comment_content'], $i['comment_created'], $i['comment_modified'], $i['comment_like']);
   		}
   		return $list;
   	}
   	
   	public static function readUser($id){
    	$database = new Database();
		$db = $database->getConnection();
		$query = "SELECT firstname, comments.comment_content FROM users, posts, comments WHERE users.id = comments.id AND comments.post_id = posts.post_id AND posts.post_id = :id ORDER BY comments.comment_created DESC";
		$stmt = $db->prepare($query);
		$stmt->execute(array('id' => $id));
		$list = [];		
		foreach ($stmt->fetchAll() as $firstname_comment) {
			$array = array($firstname_comment['firstname'],$firstname_comment['comment_content']);
			$list[] = $array;
		}		
		return $list;
    }  		
}
 ?>