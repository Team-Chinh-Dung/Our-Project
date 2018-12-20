<?php 
//require_once 'config/database.php';
/**
 * 
 */
class Category
{
	private $conn;
	private $table_name = "categories";

	public $category_id;
	public $category_name;
	
	public function __construct($category_id, $category_name)
	{
		$this->category_id = $category_id;
		$this->category_name = $category_name;
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

	public function showError($stmt){
	    echo "<pre>";
	        print_r($stmt->errorInfo());
	    echo "</pre>";
   	}
	public static function readCategories(){
   		$database = new Database();
		$db = $database->getConnection();

		$list = [];
   		$query = "SELECT * FROM categories";
    	$stmt = $db->prepare( $query );
    	$stmt->execute();
    	foreach ($stmt->fetchAll() as $category) {
      		$list[] = new Category($category['category_id'], $category['category_name']);
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
    		return new Category($category_id['category_id'], $category_id['category_name']);
    	}
    	return null;
    }
}
 ?>