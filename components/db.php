<?php

/**
* 
*/
class Db
{
	
	public static function getConnection()
	{
		$paramsPath = ROOT.'/config/db_params.php';
		$params = include($paramsPath);

		$dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
		$db = new PDO($dsn, $params['user'], $params['password']);
		$db->exec("set names utf8");

		return $db;
	}
	public static function putMysqli()
	{
		$paramsPath = ROOT.'/config/db_params.php';
		$params = include($paramsPath);

		$mysqli = new mysqli('localhost', 'root', '', 'super_mag');
			if ($mysqli) {
				echo 'база данных успешно подключена';
				return $mysqli;
			} else{
				echo 'Не удалось подключиться к базе данных';
			}

	}
}

?>