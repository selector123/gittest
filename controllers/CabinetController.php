<?php
/**
* 
*/
class CabinetController
{
	
	public function actionIndex()
	{
		$userId = User::checkLogged();

		$categories = array();
		$categories = Category::getCategoriesList();
		$username = array();
		$username = User::getUserById($userId);
		
		include_once '/template/header.php';
		require_once (ROOT.'/views/cabinet/index.php');
		return true;
	}

	public function actionEdit()
	{
		$userId = User::checkLogged();

		$username = array();

		$username = User::getUserById($userId);
		$result = false;

		if (isset($_POST['submit'])) {
			$name = $_POST['name'];
			$password = $_POST['password'];

			$errors = false;

			 if (!User::checkName($name)) {
                $errors[] = 'Имя не должно быть короче 2-х символов';
            }          
            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }

            if ($errors == false) {
            	$password = password_hash($password, PASSWORD_DEFAULT);
                $result = User::edit($userId, $name, $password);
            }
		}
		$categories = array();
		$categories = Category::getCategoriesList();
		
		
		
		include_once '/template/header.php';
		require_once (ROOT.'/views/cabinet/edit.php');
		return true;
	}
}



