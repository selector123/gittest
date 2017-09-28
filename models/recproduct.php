<?php
include_once ROOT.'/components/db.php';

/**
* 
*/
class RecProduct
{
	const SHOW_BY_DEFAULT = 4;

	public static function getLastestRecProduct($count = self::SHOW_BY_DEFAULT)
	{
		$count = intval($count);

		$db = Db::getConnection();
		if (!$db) {
			echo 'Ошибка подключения к базе данных';
		}

		$RecProductList = array();

		$query = 'SELECT id, name, price,description, image, is_new FROM product WHERE status = "1" AND is_recommened = 1 ORDER BY id DESC LIMIT 4';

		$result = $db->query($query);
		if (!$result) {
			echo 'Ошибка запроса!';
		}

		$i = 0;
		while ($row = $result->fetch()) {
			$RecProductList[$i]['id'] = $row['id'];
			$RecProductList[$i]['name'] = $row['name'];
			$RecProductList[$i]['image'] = $row['image'];
			$RecProductList[$i]['price'] = $row['price'];
			$RecProductList[$i]['description'] = $row['description'];
			$RecProductList[$i]['is_new'] = $row['is_new'];
			$i++;
		}

		return $RecProductList;
	}

	public static function getProductListByCategory($categoryId = false, $page)
	{

		if($categoryId){

		$page = intval($page);
		$offset = ($page - 1) * self::SHOW_BY_DEFAULT;

		$db = Db::getConnection();
		if (!$db) {
			echo 'Ошибка подключения к базе данных';
		}
		$ListProducts = array();
		$query = "SELECT id, name, price,description, image, is_new FROM product WHERE status = '1' AND category_id = '$categoryId' ORDER BY id ASC LIMIT ".self::SHOW_BY_DEFAULT;
		$result = $db->query($query);
		if(!$result){
			echo 'Ошибка запроса';
		}

		$i = 0;
		while ($row = $result->fetch()) {
			$ListProducts[$i]['id'] = $row['id'];
			$ListProducts[$i]['name'] = $row['name'];
			$ListProducts[$i]['image'] = $row['image'];
			$ListProducts[$i]['price'] = $row['price'];
			$ListProducts[$i]['description'] = $row['description'];
			$ListProducts[$i]['is_new'] = $row['is_new'];
			$i++;
		}

		return $ListProducts;


		}
	}
}






?>