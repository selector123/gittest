<?php
/**
* 
*/
class contactsController
{
	public function actionIndex()
	{

		//ПИСЬМО МОЖНО ОТПРАВИТЬ ТОЛЬКО С СЕРВЕРА!


		$userEmail = '';
		$userText = '';
		$result = false;

		if (isset($_POST['submit'])) {
			$userEmail = $_POST['userEmail'];
			$userText = $_POST['userText'];

			$errors = false;

			if (!User::checkEmail($userEmail)) {
				$errors[] = 'Нерпавильный Email!';
			}
			if ($errors == false) {
				$adminEmail = 'email АДМИНИСТРАТОРА';
				$message = "Текст: {$userText}. От {$userEmail}";
				$subject = 'Тема письма';
				$result = mail($adminEmail, $subject, $message);
				if ($result) {
					$result = true;
				}
			}
		}


		$categories = array();
		$categories = Category::getCategoriesList();

		include_once '/template/header.php';
		require_once (ROOT. '/views/contacts/index.php');

		return true;
	}
	public function actionajax()
	{
		require_once (ROOT. '/views/ajax/index.php');

	}
	

}







?>