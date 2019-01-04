<?php 
class Category
{
	private $conn;
	private $table_name = "categories";
	public $category_id;
	public $category_name;

	public function __construct($db){
		$this->conn = $db;
	}

	public function create(){
		$query = "INSERT INTO ".$this->table_name."
		SET
		category_id = :category_id,
		category_name = :category_name";
		$stmt = $this->conn->prepare($query);
		$stmt->bindParam(':category_id', $this->category_id);
		$stmt->bindParam(':category_name', $this->category_name);

		if($stmt->execute()){
			return true;
		}else{
			return false;
		}
	}

	public function update($id){
		$query = "UPDATE categories SET category_name = :category_name WHERE category_id = $id";
		$stmt = $this->conn->prepare($query);
		$this->category_name=htmlspecialchars(strip_tags($this->category_name));
		$stmt->bindParam(':category_name', $this->category_name);
		if($stmt->execute()){
            return true;
        }else{
            $this->showError($stmt);
            return false;
        }
	}

	public function delete($id){
		$query = "DELETE FROM categories WHERE category_id= $id";
		$stmt = $this->conn->prepare($query);
        if($stmt->execute()){
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

   	public static function countCategories(){
    	$database = new Database();
		$db = $database->getConnection();
		$query = "SELECT category_id FROM categories";
		$stmt = $db->prepare($query);
		$stmt->execute();
		$countCategories = $stmt->rowCount();
		return $countCategories;
    }

   	public function readAll(){
   		$query = "SELECT * FROM categories";
    	$stmt = $this->conn->prepare( $query );
    	$stmt->execute();
    	return $stmt;
   	}

	public static function readCategories(){
   		$database = new Database();
		$db = $database->getConnection();

		$list = [];
   		$query = "SELECT * FROM categories";
    	$stmt = $db->prepare( $query );
    	$stmt->execute();
    	foreach ($stmt->fetchAll() as $category) {    		
      		$array = array($category['category_id'], $category['category_name']);
      		$list[] = $array;
    	}
    	return $list;
    }
    
    public static function readCategory($id){
    	$database = new Database();
		$db = $database->getConnection();

		$query = "SELECT * FROM categories WHERE category_id = :id";
		$stmt = $db->prepare( $query );
    	$stmt->execute(array('id' => $id));
    	$category_id = $stmt->fetch();
    	if(isset($category_id['category_id'])){
    		return array($category_id['category_id'], $category_id['category_name']);
    	}
    	return null;
    }
}
 ?>