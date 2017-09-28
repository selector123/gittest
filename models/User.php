<?php

class User
{

    /**
     * Регистрация пользователя 
     * @param type $name
     * @param type $email
     * @param type $password
     * @return type
     */
    public static function registr($name, $email, $password)
    {

        $db = Db::getConnection();
        if(!$db){
            echo 'Не подключился!';
        }

        $sql = "INSERT INTO user (name, email, password, role) "
                . "VALUES (:name, :email, :password, 'null')";

        $result = $db->prepare($sql);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);

        return $result->execute();
    }

    /**
     * Редактирование данных пользователя
     * @param string $name
     * @param string $password
     */
    public static function edit($id, $name, $password)
    {
        $db = Db::getConnection();
        if (!$db) {
            echo 'Ошибка подключения к бд!';
        }
        
        $sql = "UPDATE user 
            SET name = :name, password = :password 
            WHERE id = :id";
        
        $result = $db->prepare($sql);                                  
        $result->bindParam(':id', $id, PDO::PARAM_INT);       
        $result->bindParam(':name', $name, PDO::PARAM_STR);    
        $result->bindParam(':password', $password, PDO::PARAM_STR); 
        return $result->execute();
    }


    /**
     * Проверяем существует ли пользователь с заданными $email и $password
     * @param string $email
     * @param string $password
     * @return mixed : ingeger user id or false
     */
    public static function checkUserData($email, $password)
    {
        $db = Db::getConnection();
        if(!$db){
            echo 'Не подключился!';
        }

        $sql = 'SELECT * FROM user WHERE email = :email';

        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_INT);
        $result->execute();
        $user = $result->fetch();
        $db_pas1 = self::checkUserPas($email, $password);
        if ($user) {
            if ($db_pas1 == true) {
                return $user['id'];
            }
        }

        return false;
    }
     public static function checkUserPas($email, $password)
    {
        $db = Db::getConnection();
        if(!$db){
            echo 'Не подключился!';
        }

        $sql = 'SELECT * FROM user WHERE email = :email';

        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_INT);
        $result->execute();

        $user = $result->fetch();
        $db_pas = $user['password'];
        $result_pas = password_verify($password, $db_pas);
        if ($user) {
            if ($result_pas == true) {
            return $user['password'];
        }
        }

        return false;
    }

    /**
     * Запоминаем пользователя
     * @param string $email
     * @param string $password
     */
    public static function auth($userId)
    {
        $_SESSION['user'] = $userId;
    }

    public static function checkLogged()
    {
        // Если сессия есть, вернем идентификатор пользователя
        if (isset($_SESSION['user'])) {
            return $_SESSION['user'];
        }

        header("Location: /user/login");
    }

    public static function isGuest()
    {
        if (isset($_SESSION['user'])) {
            return false;
        }
        return true;
    }

    /**
     * Проверяет имя: не меньше, чем 2 символа
     */
    public static function checkName($name)
    {
        if (strlen($name) >= 2) {
            return true;
        }
        return false;
    }

    /**
     * Проверяет имя: не меньше, чем 6 символов
     */
    public static function checkPassword($password)
    {
        if (strlen($password) >= 6) {
                return true;
        }
        return false;
    }
    public static function passwordMatch($email, $password)
    {
        $db_pas = checkUserPas($email, $password);
        $result_pas = password_verify($password, $db_pas);

    }

    /**
     * Проверяет email
     */
    public static function checkEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }

    public static function checkEmailExists($email)
    {

        $db = Db::getConnection();

        $sql = 'SELECT COUNT(*) FROM user WHERE email = :email';

        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->execute();

        if ($result->fetchColumn())
            return true;
        return false;
    }

    /**
     * Returns user by id
     * @param integer $id
     */
    public static function getUserById($id)
    {
        if ($id) {
            $db = Db::getConnection();
            $sql = 'SELECT * FROM user WHERE id = :id';

            $result = $db->prepare($sql);
            $result->bindParam(':id', $id, PDO::PARAM_INT);

            // Указываем, что хотим получить данные в виде массива
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $result->execute();


            return $result->fetch();
        }
    }
    public static function isAdmin($id)
    {
        if ($id) {
            $db = Db::getConnection();
            if (!$db) {
                echo 'Ошибка подключения!';
            }
            $sql = "SELECT * FROM user WHERE id = :id AND role = 'admin'";
            $result = $db->prepare($sql);
            $result->bindParam(':id', $id, PDO::PARAM_STR);

            // Указываем, что хотим получить данные в виде массива
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $result->execute();


            return $result->fetch();


        }
    }
public static function isAz($name)
{
    if (preg_match('~[^A-Za-z-]~', $name)) {
        return true;
    } else{
        return false;
    }





}

}
