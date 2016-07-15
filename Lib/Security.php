<?php

/**
 * Created by PhpStorm.
 * User: Эрлан
 * Date: 15.07.2016
 * Time: 18:32
 */
class Security {
    private static $isAuth;

    public static function GetStatus() {
        return isset($_SESSION['auth']);
    }


    public static function SignIn($login, $password) {
        $user = Database::GetUserByLogin($login);
        if(isset($user['user_login'])) {
            $password = md5($password);
            if($user['user_password'] == $password) {
                self::$isAuth = true;
                if($user['user_type'] == 'admin') {
                    $_SESSION['auth'] = array('auth' => true, 'role' => 'admin');
                } else {
                    $_SESSION['auth'] = array('auth' => true, 'role' => 'user');
                }
                return array('result' => 'ok');
            } else {
                return array('result' => 'no');
            }
        } else {
            return array('result' => 'no');
        }
    }

    public static function SignOut() {
        unset($_SESSION['auth']);
        return header('Location: /tdm/');
    }

}