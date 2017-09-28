<?php
/**
* 
*/
class catalogController
{
	public function actionIndex()
	{
		
		$categories = array();
		$categories = Category::getCategoriesList();
		$RecProductLists = array();
		$RecProductLists = RecProduct::getLastestRecProduct();
		require_once (ROOT. '/views/catalog/index.php');

		return true;
	}

	public function actionCategory($categoryId, $page = 1)
	{
		$categories = array();
		$categories = Category::getCategoriesList();
		$categoryName = array();
		$categoryName = categoryId::getNamesById($categoryId);
		$categoryProducts = array();
		$categoryProducts = RecProduct::getProductListByCategory($categoryId, $page);
		include_once '/template/header.php';
		require_once (ROOT. '/views/catalog/index.php');

		return true;

	}
	




}





?>