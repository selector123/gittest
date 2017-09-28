<?php
include_once ROOT. '/models/category.php';
include_once ROOT. '/models/product.php';
/**
* 
*/
class productController
{
	
	public function actionView($id)
	{
		$categories = array();
		$categories = Category::getCategoriesList();

		$product = array();
		$product = product::getProductById($id);
		include_once '/template/header.php';
		require_once (ROOT. '/views/product/view.php');

		return true;
	}


}



?>