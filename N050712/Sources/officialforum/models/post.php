<?php
class Post
{
	private $conn;
	private $table_name = "posts";

	public $post_id;
	public $id;
	public $category_id;
	public $post_title;
	public $post_content;
	public $post_created;
	public $post_modified;
	public $post_image;

	public function __construct($db){
		$this->conn = $db;
	}

	public function create(){
		$this->post_created=date('Y-m-d H:i:s');

		$query = "INSERT INTO ".$this->table_name."
		SET
		id = :id,
		category_id = :category_id,
		post_title = :post_title,
		post_content = :post_content,
		post_created = :post_created,
		post_image = :post_image";
		
		$stmt = $this->conn->prepare($query);

		$this->post_title=htmlspecialchars(strip_tags($this->post_title));
		$this->post_content=htmlspecialchars(strip_tags($this->post_content));

		$stmt->bindParam(':id', $this->id);
		$stmt->bindParam(':category_id', $this->category_id);
		$stmt->bindParam(':post_title', $this->post_title);
		$stmt->bindParam(':post_content', $this->post_content);
		$stmt->bindParam(':post_created', $this->post_created);
		$stmt->bindParam(':post_image', $this->post_image);

		if ($stmt->execute()) {
			return true;
		}else{
			$this->showError($stmt);
			return false;
		}
	}

	public function showError($stmt){
        echo "<pre>";
            print_r($stmt->errorInfo());
        echo "</pre>";
    }
    public static function readPost_Category($id){
    	$database = new Database();
		$db = $database->getConnection();
		$list = [];
    	$query = "SELECT * FROM posts WHERE category_id = :id ORDER BY post_created DESC";
    	$stmt = $db->prepare( $query );
    	$stmt->execute(array('id' => $id));
    	foreach ($stmt->fetchAll() as $i) {
    		$list[] = array($i['post_id'], $i['id'], $i['category_id'], $i['post_title'], $i['post_content'], $i['post_created'], $i['post_modified'], $i['post_image']);	
    	}
    	return $list;
    }

    public static function readContent($id){
    	$database = new Database();
		$db = $database->getConnection();
    	$query = "SELECT * FROM posts WHERE post_id = :id";
    	$stmt = $db->prepare( $query );
    	$stmt->execute(array('id' => $id));
    	$content = $stmt->fetch();
    	if (isset($content['id'])) {
	      return array($content['post_id'], $content['id'], $content['category_id'], $content['post_title'], $content['post_content'], $content['post_created'], $content['post_modified'], $content['post_image']);
	    }
    	return null;
    }

    public static function readUser($id){
    	$database = new Database();
		$db = $database->getConnection();
		$query = "SELECT firstname, post_id FROM users, posts, categories WHERE users.id = posts.id AND posts.category_id = categories.category_id AND categories.category_id = :id ORDER BY posts.post_created DESC";
		$stmt = $db->prepare($query);
		$stmt->execute(array('id' => $id));
		$list = [];		
		foreach ($stmt->fetchAll() as $firstname_postid) {
			$array = array($firstname_postid['firstname'],$firstname_postid['post_id']);
			$list[] = $array;
		}		
		return $list;
    }

    public static function countPosts(){
    	$database = new Database();
		$db = $database->getConnection();
		$query = "SELECT post_id FROM posts";
		$stmt = $db->prepare($query);
		$stmt->execute();
		$countPosts = $stmt->rowCount();
		return $countPosts;
    }

    public static function countPostsUser($id){
    	$database = new Database();
		$db = $database->getConnection();
		$query = "SELECT post_id FROM posts WHERE id = :id";
		$stmt = $db->prepare($query);
		$stmt->execute(array('id' => $id));
		$countPostsUser = $stmt->rowCount();
		return $countPostsUser;
    }

    public static function showHomeContent(){
    	$database = new Database();
		$db = $database->getConnection();
		$list = [];
		$query = "SELECT * FROM posts WHERE category_id=2 ORDER BY post_created DESC";
		$stmt = $db->prepare($query);
		$stmt->execute();
		foreach ($stmt->fetchAll() as $home) {
			$array = array($home['post_id'],$home['post_title'],$home['post_content'],$home['post_image']);
			$list[] = $array;
		}
		return $list;
    }

    public static function showHomeTitle(){
    	$database = new Database();
		$db = $database->getConnection();
		$list = [];
		$query = "SELECT * FROM posts WHERE category_id=1 ORDER BY post_created DESC LIMIT 2";
		$stmt = $db->prepare($query);
		$stmt->execute();
		foreach ($stmt->fetchAll() as $home) {
			$array = array($home['post_id'],$home['post_title'],$home['post_content'],$home['post_image'],$home['post_created']);
			$list[] = $array;
		}
		return $list;
    }
    public static function readNewPosts(){
    	$database = new Database();
		$db = $database->getConnection();
		$list = [];
		$query = "SELECT * FROM posts ORDER BY post_created DESC LIMIT 3";//dung top 3 bai viet moi nhat
		$stmt = $db->prepare($query);
		$stmt->execute();
		foreach ($stmt->fetchAll() as $readNewPosts) {
			$array = array($readNewPosts['post_id'],$readNewPosts['post_title'],$readNewPosts['post_content'],$readNewPosts['post_image'],$readNewPosts['post_created'] );
			$list[] = $array;
		}
		return $list;
    }
    public static function readAnswerQuestion(){
    	$database = new Database();
		$db = $database->getConnection();
		$list = [];
		$query = "SELECT * FROM posts WHERE category_id = 3 ORDER BY post_created DESC";
		$stmt = $db->prepare($query);
		$stmt->execute();
		foreach ($stmt->fetchAll() as $readAnswerQuestion) {
			$array = array($readAnswerQuestion['post_id'],$readAnswerQuestion['post_title'],$readAnswerQuestion['post_content'],$readAnswerQuestion['post_image'],$readAnswerQuestion['category_id']);
			$list[] = $array;
		}
		return $list;
    }
}
 ?>