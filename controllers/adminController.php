<?php
/**
* 
*/
class adminController
{
	public function actionIndex()
	{
		$inform = User::isAdmin($_SESSION['user']);
		if ($inform['role'] == 'admin') {
		
		include_once '/template/admin_header.php';
        require_once(ROOT . '/views/admin/index.php');
        return true;
    } else{
    	echo 'У вас нет доступа к панели администратора!';
    	echo "<BR><A HREF='/'>Вернутся на сайт</A>";
    }
}
    public function actionProduct()
    {
    	$inform = User::isAdmin($_SESSION['user']);
		if ($inform['role'] == 'admin') {
    	$AllProdItem = product::getAllProducts();

    	include_once '/template/admin_header.php';
        require_once(ROOT . '/views/admin/product.php');
        return true;
    }
    }
    public function actionDeleteT($id)
    {
    	$inform = User::isAdmin($_SESSION['user']);
		if ($inform['role'] == 'admin') {
    	if (isset($id)) {
    	Admin::delete($id);

    	$referrer = $_SERVER['HTTP_REFERER'];
		header("Location: $referrer");
	}
    }
}
    public function actionEditProduct($id)
    {
        $inform = User::isAdmin($_SESSION['user']);
        if ($inform['role'] == 'admin') {
    	if (isset($_POST['submit'])) {
    		$options['name'] = $_POST['name'];
            $options['code'] = $_POST['code'];
            $options['price'] = $_POST['price'];
            $options['category_id'] = $_POST['category_id'];
            $options['brand'] = $_POST['brand'];
            $options['availability'] = $_POST['availability'];
            $options['description'] = $_POST['description'];
            $options['image'] = $_POST['image'];
            $options['is_new'] = $_POST['is_new'];
            $options['is_recommended'] = $_POST['is_recommended'];
            $options['status'] = $_POST['status'];
            $options['id'] = $id;

            $result = admin::edit($id, $options);
            if ($result) {
                    echo 'Все ок';
                } else{
                    echo 'Ошибка запроса';
                    exit;
                }
                // Перенаправляем пользователя на страницу управлениями товарами
                header("Location: /adminpanel/product");
    		
    		
    	}
    }
    	$ids = $id;
    	$prodinformation = product::getProductById($id);

    	include_once '/template/admin_header.php';
        require_once(ROOT . '/views/admin/editProduct.php');
        return true;
    }
    public function actionCreateT()
	{
		$inform = User::isAdmin($_SESSION['user']);
		if ($inform['role'] == 'admin') {
			if (isset($_POST['submit'])) {
			$name = $_POST['name'];
            $category_id = $_POST['category_id'];
            $code = $_POST['code'];
            $price = $_POST['price'];
            $availability = $_POST['availability'];
            $brand = $_POST['brand'];
            $image = $_POST['image'];
            $description = $_POST['description'];
            $is_new = $_POST['is_new'];
            $is_recommened = $_POST['is_recommened'];
            $status = $_POST['status'];
    		$result = admin::create($name,$category_id,$code,$price,$availability,$brand,$image,$description,$is_new,$is_recommened,$status);
    		if ($result) {
    			header("Location: /adminpanel/product");
    		} else{
    			echo 'Повторите попытку!';
    		}
    	}
		
    }
    	include_once '/template/admin_header.php';
        require_once(ROOT . '/views/admin/createproduct.php');
        return true;
	}
    public function actionCreate()
    {
        $inform = User::isAdmin($_SESSION['user']);
        if ($inform['role'] == 'admin') {
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $options['name'] = $_POST['name'];
            $options['code'] = $_POST['code'];
            $options['price'] = $_POST['price'];
            $options['category_id'] = $_POST['category_id'];
            $options['brand'] = $_POST['brand'];
            $options['availability'] = $_POST['availability'];
            $options['description'] = $_POST['description'];
            $options['image'] = $_POST['image'];
            $options['is_new'] = $_POST['is_new'];
            $options['is_recommended'] = $_POST['is_recommended'];
            $options['status'] = $_POST['status'];
            
            
                $id = admin::createProduct($options);
                if ($id) {
                    echo 'Все ок';
                } else{
                    echo 'Ошибка запроса';
                    exit;
                }
                // Перенаправляем пользователя на страницу управлениями товарами
                header("Location: /adminpanel/product");
            }
            
            include_once '/template/admin_header.php';
        require_once(ROOT . '/views/admin/createproduct.php');
        return true;
    }
        }
        
}


?>