<?php 
	/**
	 * 
	 */
	class Category
	{
		private $conn;
		private $table_name = "categories";
		public $category_id;
		public $category_name;
		function __construct($db)
		{
			$this->conn = $db;
		}
		function insert()
		{
			$query = "INSERT INTO ".$this->table_name."
			SET
			category_id = :category_id,
			category_name = :category_name";

			$stmt = $this->conn->prepare($query);
			$stmt->bindParam(':category_id', $this->category_id);
			$stmt->bindParam(':category_name', $this->category_name);
			$stmt->execute();
			/*if($stmt->execute()){
				return true;
			}else{
				return false;
			}*/
		}
		public function showError($stmt){
	    	echo "<pre>";
	        	print_r($stmt->errorInfo());
	    	echo "</pre>";
   		}
   		function showAll()
   		{
   			$query = "SELECT * FROM categories";
   			$stmt = $this->conn->prepare($query);
   			$stmt->execute();
   			return $stmt;
   		}
	}
 ?>