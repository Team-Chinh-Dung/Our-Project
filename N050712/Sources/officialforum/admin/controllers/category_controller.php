<?php 
	require_once('controllers/base_controller.php');
	require_once '../models/category.php';
	require_once '../config/core.php';
	/**
	 * 
	 */
	class CategoryController extends BaseController
	{
		
		function __construct()
		{
			$this->folder = 'category';
		}
		public function category(){
			$category = Category::readCategories();
			$data = array('category' => $category);
			$this->render('category',$data);
		}
		
	}
 ?>