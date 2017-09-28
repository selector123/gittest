<?php

include_once ROOT. '/models/category.php';
include_once ROOT. '/models/recproduct.php';
/**
* 
*/
class siteController
{
	
	public function actionIndex()
	{
		$categories = array();
		$categories = Category::getCategoriesList();
		$RecProductLists = array();
		$RecProductLists = RecProduct::getLastestRecProduct();

		include_once '/template/header.php';		
		require_once (ROOT .'/views/site/index.php');

		return true;
	}
	public function actionSearch()
	{
		if (isset($_POST['submit'])) {
			$search_text = ucfirst($_POST['text']);
			$SearchProducts = Search::SearchTov($search_text);

		}



		$categories = array();
		$categories = Category::getCategoriesList();

		include_once '/template/header.php';		
		require_once (ROOT .'/views/site/search.php');

		return true;



	}

	//ПИСЬМО ОТПРАВИТЬСЯ ТОЛЬКО С СЕРВЕРА!!!!!!!
	
	public function actionContact()
	{
		$mail = 'ЛЮБАЯ ПОЧТА@mail.ru';
		$subject = 'Тема письма';
		$message = 'Содержание';
		$result = mail($mail, $subject, $message);
		if ($result) {
			var_dump($result);
		} else{
			die;
		}
	}
}