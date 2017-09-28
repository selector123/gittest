<?php
include_once ROOT.'/components/db.php';
/**
* 
*/
class product
{
public static function getProductByIds($idsArray)
{
	$products = array();
		$db = Db::getConnection();
			if (!$db) {
			echo 'Ошибка подключения к базе данных';
		}

	$idsString = implode(',', $idsArray);

	$sql = "SELECT * FROM product WHERE status='1' AND id IN ($idsString)";

	$result = $db->query($sql);
	if (!$result) {
		echo ' Ошибка запроса';
	}
	$result->setFetchMode(PDO::FETCH_ASSOC);

	$i = 0;
	while ($row = $result->fetch()) {
		$products[$i]['id'] = $row['id'];
		$products[$i]['code'] = $row['code'];
		$products[$i]['name'] = $row['name'];
		$products[$i]['price'] = $row['price'];
		$i++;
	}
	return $products;

}
public static function getAllProducts()
{
	$db = Db::getConnection();
			if (!$db) {
			echo 'Ошибка подключения к базе данных';
		}
	$sql = "SELECT * FROM product";
	$result = $db->query($sql);
	if (!$result) {
		echo 'Ошибка запроса!';
	}
	$result->setFetchMode(PDO::FETCH_ASSOC);
	$i = 0;
	while ($row = $result->fetch()) {
		$AllProducts[$i]['id'] = $row['id'];
		$AllProducts[$i]['code'] = $row['code'];
		$AllProducts[$i]['name'] = $row['name'];
		$AllProducts[$i]['price'] = $row['price'];
		$i++;
	}
	return $AllProducts;
}
public static function getAllProductsById($id)
{
	$db = Db::getConnection();
			if (!$db) {
			echo 'Ошибка подключения к базе данных';
		}
	$sql = "SELECT * FROM product WHERE id = '$id'";
	$result = $db->query($sql);
	if (!$result) {
		echo 'Ошибка запроса!';
	}
	$result->setFetchMode(PDO::FETCH_ASSOC);
	$i = 0;
	while ($row = $result->fetch()) {
		$AllProductsById[$i]['status'] = $row['status'];
		$AllProductsById[$i]['code'] = $row['code'];
		$AllProductsById[$i]['name'] = $row['name'];
		$AllProductsById[$i]['price'] = $row['price'];
		$AllProductsById[$i]['category_id'] = $row['category_id'];
		$AllProductsById[$i]['availability'] = $row['availability'];
		$AllProductsById[$i]['brand'] = $row['brand'];
		$AllProductsById[$i]['image'] = $row['image'];
		$AllProductsById[$i]['description'] = $row['description'];
		$AllProductsById[$i]['is_new'] = $row['is_new'];
		$AllProductsById[$i]['is_recommened'] = $row['is_recommened'];
		$i++;
	}
	return $AllProductsById;
}
public static function getProductById($id)
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Текст запроса к БД
        $sql = 'SELECT * FROM product WHERE id = :id';
        // Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);
        // Выполнение коменды
        $result->execute();
        // Получение и возврат результатов
        return $result->fetch();
    }
}








?>