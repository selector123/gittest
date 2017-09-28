<?php
include_once ROOT.'/components/db.php';
/**
* 
*/
class categoryId
{
	public static function getNamesById($categoryId = false)
	{
		if($categoryId){

			$db = Db::getConnection();
		if (!$db) {
			echo 'Ошибка подключения к базе данных';
		}
		$ListProducts = array();
		$query = "SELECT name FROM category WHERE id = '$categoryId' ORDER BY id DESC";
		$result = $db->query($query);
		if(!$result){
			echo 'Ошибка запроса';
		}

		while ($row = $result->fetch()) {
			$NamesById['name'] = $row['name'];
		}

		return $NamesById;
	
}
}
}







?>