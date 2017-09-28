<?php

return array(
	'' => 'site/index', //actionIndex in SiteController

	//ПРОСМОТР СТРАНИЦЫ ПРОДУКТА

	'product/([0-9]+)' => 'product/view/$1',

	//КАТЕГОРИИ

	'category/([0-9]+)' => 'catalog/category/$1',

	'category/([0-9]+)/([0-9]+)' => 'catalog/category/$1/$2',

	//КОРЗИНА

	'cart/add/([0-9]+)' => 'cart/add/$1',

	'cart' => 'cart/index',

	'cart/addAjax/([0-9]+)' => 'cart/addAjax/$1',

	'cart/delete/([0-9]+)' => 'cart/delete/$1',

	'cart/checkout' => 'cart/checkout',

	//ПОИСК
	
	'search' => 'site/search',

	//АДМИНПАНЕЛЬ

	'adminpanel' => 'admin/index',

	'adminpanel/create' => 'admin/Create',

	'adminpanel/product' => 'admin/product',

	'adminpanel/product/([0-9]+)' => 'admin/DeleteT/$1',

	'adminpanel/editproduct/([0-9]+)' => 'admin/EditProduct/$1',

	'adminpanel/category' => 'admincategory/Category',
	
	'adminpanel/editcategory/([0-9]+)' => 'admincategory/EditCategory/$1',

	'adminpanel/createcat' => 'admincategory/createCategory',

	'adminpanel/deletecat/([0-9]+)' => 'admincategory/deleteCategory/$1',


	//ПОЛЬЗОВАТЕЛИ

	'user/registr' => 'user/registr',

	'user/login' => 'user/login',

	'user/logout' => 'user/logout',

	//КАБИНЕТ ПОЛЬЗОВАТЕЛЯ

	'cabinet' => 'cabinet/index',

	'cabinet/edit' => 'cabinet/edit',

	'contacts' => 'contacts/index',

	'ajax' => 'contacts/ajax',


	

);