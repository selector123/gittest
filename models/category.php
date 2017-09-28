<?php
include_once ROOT.'/components/db.php';
/**
* 
*/
class Category
{
	
	public static function getCategoriesList()
	{
		$db = Db::getConnection();
		if(!$db){
			echo 'Не подключился!';
		}

		$CategoryList = array();

		$query = 'SELECT id, name FROM category ORDER BY sort_order ASC';
		$result = $db->query($query);
		if(!$result){
			echo "Всё плохо!";
		}
		$i = 0;
		while ($row = $result->fetch()) {
			$categoryList[$i]['id'] = $row['id'];
			$categoryList[$i]['name'] = $row['name'];
			$i++;
		}

		return $categoryList;
	}

}





?>