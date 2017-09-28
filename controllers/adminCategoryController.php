<?php
/**
* 
*/
class admincategoryController
{
	public function actionCategory()
        {
        $Categories = admincat::getCategory();

        include_once '/template/admin_header.php';
        require_once(ROOT . '/views/admincat/index.php');
        return true;        
    }
    public function actioneditCategory($id)
    {
        $inform = User::isAdmin($_SESSION['user']);
        if ($inform['role'] == 'admin') {
        if (isset($_POST['submit'])) {
        $options['name'] = $_POST['name'];
        $options['sort_order'] = $_POST['sort_order'];
        $options['status'] = $_POST['status'];
        $options['id'] = $id;

        $result = admincat::editCategory($id, $options);
        if ($result) {
                    echo 'Все ок';
                } else{
                    echo 'Ошибка запроса';
                    exit;
                }
                // Перенаправляем пользователя на страницу управлениями товарами
                header("Location: /adminpanel/category");
    }


        $idcat = admincat::getCategoryById($id);
        include_once '/template/admin_header.php';
        require_once(ROOT . '/views/admincat/editcat.php');
        return true;
    }
    }
    public function actioncreateCategory()
    {
        $inform = User::isAdmin($_SESSION['user']);
        if ($inform['role'] == 'admin') {
        if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $sort_order = $_POST['sort_order'];
        $status = $_POST['status'];

        $result = admincat::createCategory($name,$sort_order,$status);
        if ($result) {
                echo 'Категория изменена!';
                header("Location: /adminpanel/category");
        } else{
            echo 'Категория не создана!';
        }
    }


        include_once '/template/admin_header.php';
        require_once(ROOT . '/views/admincat/createcat.php');
        return true;
    }
    }
    public function actiondeleteCategory($id)
    {
        $inform = User::isAdmin($_SESSION['user']);
        if ($inform['role'] == 'admin') {
        if (isset($id)) {
        admincat::deleteCategory($id);

        header("Location: /adminpanel/category");
    }
    }
    }
















}

















?>