<?php
require_once 'config/database.php';
/**
 * 
 */
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
	
	public function __construct($post_id, $id, $category_id, $post_title, $post_content, $post_created, $post_modified)
	{
		$this->post_id = $post_id;
		$this->id = $id;
		$this->category_id = $category_id;
		$this->post_title = $post_title;
		$this->post_content = $post_content;
		$this->post_created = $post_created;
		$this->post_modified = $post_modified;
	}

	public function create(){
		$database = new Database();
		$db = $database->getConnection();
		
		$this->post_created=date('Y-m-d H:i:s');

		$query = "INSERT INTO ".$this->table_name."
		SET
		id = :id,
		category_id = :category_id,
		post_title = :post_title,
		post_content = :post_content,
		post_created = :post_created";
		
		$stmt = $db->prepare($query);

		$this->post_title=htmlspecialchars(strip_tags($this->post_title));
		$this->post_content=htmlspecialchars(strip_tags($this->post_content));


		$stmt->bindParam(':id', $this->id);
		$stmt->bindParam(':category_id', $this->category_id);
		$stmt->bindParam(':post_title', $this->post_title);
		$stmt->bindParam(':post_content', $this->post_content);
		$stmt->bindParam(':post_created', $this->post_created);

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
    			
    		$list[] = new Post($i['post_id'], $i['id'], $i['category_id'], $i['post_title'], $i['post_content'], $i['post_created'], $i['post_modified']);	
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
	      return new Post($content['post_id'], $content['id'], $content['category_id'], $content['post_title'], $content['post_content'], $content['post_created'], $content['post_modified']);
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
}

 ?>