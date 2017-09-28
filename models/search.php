<?php
/**
* 
*/
class Search
{
	public static function SearchTov($text)
	{
		// Соединение с БД
        $db = Db::getConnection();
        // Текст запроса к БД
        $sql = "SELECT * FROM product WHERE name LIKE '%$text%'";
        $result = $db->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);

	$i = 0;
	while ($row = $result->fetch()) {
		$ProductsBySearch[$i]['id'] = $row['id'];
		$ProductsBySearch[$i]['status'] = $row['status'];
		$ProductsBySearch[$i]['code'] = $row['code'];
		$ProductsBySearch[$i]['name'] = $row['name'];
		$ProductsBySearch[$i]['price'] = $row['price'];
		$ProductsBySearch[$i]['category_id'] = $row['category_id'];
		$ProductsBySearch[$i]['availability'] = $row['availability'];
		$ProductsBySearch[$i]['brand'] = $row['brand'];
		$ProductsBySearch[$i]['image'] = $row['image'];
		$ProductsBySearch[$i]['description'] = $row['description'];
		$ProductsBySearch[$i]['is_new'] = $row['is_new'];
		$ProductsBySearch[$i]['is_recommened'] = $row['is_recommened'];
		$i++;

	}
	return @$ProductsBySearch;

}
}









?>