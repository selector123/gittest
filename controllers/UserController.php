<?php

class UserController
{

    public function actionRegistr()
    {
        $name = '';
        $email = '';
        $password = '';
        $result = false;
        
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            $errors = false;
            
            if (!User::checkName($name)) {
                $errors[] = 'Имя не должно быть короче 2-х символов';
            }
            if (User::isAz($name)) {
                $errors[] = 'В имени пользователя разрешены только буквы английского алфавита';
            }
            
            if (!User::checkEmail($email)) {
                $errors[] = 'Неправильный email';
            }
            
            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }
            
            if (User::checkEmailExists($email)) {
                $errors[] = 'Такой email уже используется';
            }
            
            
            if ($errors == false) {
                $password = password_hash($password, PASSWORD_DEFAULT);
                $result = User::registr($name, $email, $password);
            }

        }
        $categories = array();
        $categories = Category::getCategoriesList();
        include_once '/template/header.php';
        require_once(ROOT . '/views/user/register.php');

        return true;
    }

    public function actionLogin()
    {
        $email = '';
        $password = '';
        
        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            $errors = false;
                        
            // Валидация полей
            if (!User::checkEmail($email)) {
                $errors[] = 'Неправильный email';
            }            
            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }
            if (!User::checkUserPas($email, $password)) {
                $errors[] = 'Пароли не совпадают!';
            }


            
            // Проверяем существует ли пользователь
            $userId = User::checkUserData($email, $password);
            $isadmin = User::isAdmin($userId);
            
            if ($userId == false) {
                // Если данные неправильные - показываем ошибку
                $errors[] = 'Неправильные данные для входа на сайт';
            } else {
                if ($isadmin['role'] == 'admin') {
                    User::auth($userId);
                    header("Location: /adminpanel/"); 
                } else{
                // Если данные правильные, запоминаем пользователя (сессия)
                User::auth($userId);
                // Перенаправляем пользователя в закрытую часть - кабинет 
                header("Location: /cabinet/");
            }
            }

        }
        $categories = array();
        $categories = Category::getCategoriesList();
        include_once '/template/header.php';
        require_once(ROOT . '/views/user/login.php');

        return true;
    }
    
    /**
     * Удаляем данные о пользователе из сессии
     */
    public function actionLogout()
    {
        unset($_SESSION["user"]);
        header("Location: /");
    }
}
