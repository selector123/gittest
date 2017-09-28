<?php
/**
* 
*/
class admincat
{
	
	public static function getCategory()
	{
		$db = Db::getConnection();
        // Текст запроса к БД
        if (!$db) {
            echo 'Ошибка подключения к базе данных!';
        }
        $sql = "SELECT * FROM category ";
        $result = $db->query($sql);
        if (!$result) {
            echo 'Ошибка запроса';
        }
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $i = 0;
        while ($row = $result->fetch()) {
            $AllCategories[$i]['id'] = $row['id'];
            $AllCategories[$i]['name'] = $row['name'];
            $AllCategories[$i]['sort_order'] = $row['sort_order'];
            $AllCategories[$i]['status'] = $row['status'];
            $i++;
        }
        return $AllCategories;
	}
public static function createCategory($name,$sort_order,$status)
{
	// Соединение с БД
        $db = Db::getConnection();
        // Текст запроса к БД
        $sql = 'INSERT INTO category (name, sort_order, status) '
                . 'VALUES (:name, :sort_order, :status)';
    $result = $db->prepare($sql);
    $result->bindParam(':name', $name, PDO::PARAM_STR);
    $result->bindParam(':sort_order', $sort_order, PDO::PARAM_INT);
    $result->bindParam(':status', $status, PDO::PARAM_INT);

    return $result->execute();
}
public static function deleteCategory($id)
{
	$db = Db::getConnection();
			if (!$db) {
			echo 'Ошибка подключения к базе данных';
		}
		$sql = "DELETE FROM category WHERE id = '$id'";
		$result = $db->query($sql);
		if (!$result) {
			echo 'Невозможно удалить строку из бд!';
		}

}
public static function editCategory($id, $options)
{
    // Соединение с БД
        $db = Db::getConnection();
        // Текст запроса к БД
        $sql = "UPDATE category SET name = :name,sort_order = :sort_order,status = :status WHERE id = :id";
        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':sort_order', $options['sort_order'], PDO::PARAM_INT);
        $result->bindParam(':status', $options['status'], PDO::PARAM_INT);
        $result->bindParam(':id', $options['id'], PDO::PARAM_INT);
        return $result->execute();




}
public static function getCategoryById($id)
{
    $db = Db::getConnection();
            if (!$db) {
            echo 'Ошибка подключения к базе данных';
        }
    $sql = "SELECT * FROM category WHERE id = '$id'";
    $result = $db->query($sql);
    if (!$result) {
        echo 'Ошибка запроса';
    }
    while ($row = $result->fetch()) {
        $getcatbyid['id'] = $row['id'];
        $getcatbyid['name'] = $row['name'];
        $getcatbyid['sort_order'] = $row['sort_order'];
        $getcatbyid['status'] = $row['status'];

    }
    return $getcatbyid;


}



























}













?>