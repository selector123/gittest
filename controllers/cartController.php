<?php

/**
* 
*/
class cartController
{
	public function actionIndex()
	{
		$categories = array();
		$categories = Category::getCategoriesList();

		$productsInCart = array();

		//Получим данные из корзины
		$productsInCart = Cart::getProducts();

		if ($productsInCart) {
			//Поулчаем информацию о товарах для 
			//списка
			$productsIds = array_keys($productsInCart);
			$products = Product::getProductByIds($productsIds);

			//Получаем общую стоимость
			$totalPrice = Cart::getTotalPrice($products);
		}

		
		
		include_once '/template/header.php';
		require_once (ROOT. '/views/cart/index.php');

		return true;
	}




	public function actionAdd($id)
	{
		//Добовляем товар в корзину
		Cart::addProduct($id);


		//Возвращаем пользователя на тсраницу
		$referrer = $_SERVER['HTTP_REFERER'];
		header("Location: $referrer");
	}

	public function actionAddAjax($id)
	{
		//Доб товар в корзину
		echo Cart::addProduct($id);
		return true;
	}
	public function actionDelete($id)
	{
		
		Cart::deleteProduct($id);

		//Возвращаем пользователя на тсраницу
		$referrer = $_SERVER['HTTP_REFERER'];
		header("Location: $referrer");


	}
	public function actionCheckout()
	{
		

		$categories = array();
		$categories = Category::getCategoriesList();
		$productsInCart = array();

		//Получим данные из корзины
		$productsInCart = Cart::getProducts();

		if ($productsInCart) {
			//Поулчаем информацию о товарах для 
			//списка
			$productsIds = array_keys($productsInCart);
			$products = Product::getProductByIds($productsIds);

			//Получаем общую стоимость
			$totalPrice = Cart::getTotalPrice($products);
		}
		$countTovar = Cart::countItems();

		if (isset($_SESSION['user'])) {
			$userId = User::checkLogged();
		$username = array();
		$username = User::getUserById($userId);
		}


		include_once '/template/header.php';
		require_once (ROOT. '/views/cart/checkout.php');

		return true;
	}
}