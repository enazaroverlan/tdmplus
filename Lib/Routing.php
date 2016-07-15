<?php

/**
 * Created by PhpStorm.
 * User: Эрлан
 * Date: 13.07.2016
 * Time: 15:39
 */
class Routing {
    public static $action;

    public static function StartListeningRequests() {
        self::$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : 'about';

        switch(self::$action)
        {
            case 'about': return include_once(get_include_path().'/Models/about.php');
            case 'service': return include_once(get_include_path().'/Models/service.php');
            case 'team': return include_once(get_include_path().'/Models/team.php');
            case 'news': return include_once(get_include_path().'/Models/news.php');
            case 'career': return include_once(get_include_path().'/Models/career.php');
            case 'contacts': return include_once(get_include_path().'/Models/contacts.php');
            case 'login':
                if(isset($_REQUEST['user_login']) && isset($_REQUEST['user_password'])) {
                    $user = Security::SignIn($_REQUEST['user_login'], $_REQUEST['user_password']);
                    if($user['result'] == 'ok') {
                        return header('Location: /tdm/news');
                    } else {
                        $message = "Неправильный пароль или логин, попробуйте ещё раз!";
                        return header('Location: /tdm/login/'.$message);
                    }
                } else {
                    return include_once(get_include_path().'/Models/login.php');
                }
            break;
            case 'post': return include_once(get_include_path().'/Models/post.php');
            case 'addPost':
                    if(isset($_REQUEST['title']) && isset($_REQUEST['content'])) {
                        if(Database::AddPost($_REQUEST['title'], $_REQUEST['content'])) {
                            header('Location: /tdm/news');
                        } else {
                            $message = "Произошла неизвестная ошибка!";
                            header('Location: /tdm/news/'.$message);
                        }
                    } else {
                        $message = "Поля не заполнены!";
                        header('Location: /tdm/news/'.$message);
                    }
                break;
            case 'editPost': return include_once(get_include_path().'/Models/post.php');
            case 'removePost':
                    if(Database::RemovePost($_REQUEST['id'])) {
                        header('Location: /tdm/news');
                    } else {
                        $message = "Не удалось удалить новость";
                        header('Location: /tdm/news/'.$message);
                    }
                break;
        }
    }


}