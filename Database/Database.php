<?php

/**
 * Created by PhpStorm.
 * User: Эрлан
 * Date: 13.07.2016
 * Time: 15:33
 */
class Database {
    private static $con;

    public static function Connect()
    {
        if(self::$con != null) {
            return self::$con;
        }
        else
        {
            return self::$con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        }
    }

    public static function GetUserByLogin($login) {
        $query = "SELECT * FROM users WHERE user_login='$login'";
        $result = mysqli_query(self::Connect(), $query) or die('Error: '.mysqli_error(self::Connect()));

        return mysqli_fetch_assoc($result);
    }

    public static function AddNewUser($login, $password, $mail, $type) {
        $password = md5($password);
        $query = "INSERT INTO users(user_login, user_password, user_email, user_type) VALUES('$login', '$password', '$mail', '$type')";
        $result = mysqli_query(self::Connect(), $query);

        return $result;
    }

    public static function GetAllPosts() {
        $query = "SELECT * FROM posts ORDER BY post_id DESC";
        $result = mysqli_query(self::Connect(), $query);

        $n = mysqli_num_rows($result);
        $news = array();

        for($i=0; $i<$n; ++$i) {
            $row = mysqli_fetch_assoc($result);
            $news[$i] = $row;
        }

        return $news;
    }

    public static function GetAllPostsPaginate($page, $limit) {
        $value = $page - 1 * $limit;
        $query = "SELECT * FROM posts ORDER BY post_id LIMIT $value, $limit";
        $result = mysqli_query(self::Connect(), $query);

        $n = mysqli_num_rows($result);
        $post = array();

        for($i=0; $i < $n; ++$i) {
            $row = mysqli_fetch_assoc($result);
            $post[$i] = $row;
        }

        return $post;
    }

    public static function GetPostById($id) {
        $query = "SELECT * FROM posts WHERE post_id='$id'";
        $result = mysqli_query(self::Connect(), $query);

        return mysqli_fetch_assoc($result);
    }

    public static function AddPost($title, $content) {
        $date = date('Y-m-d');
        $query = "INSERT INTO posts(post_title, post_content, post_date) VALUES ('$title', '$content', '$date')";
        $result = mysqli_query(self::Connect(), $query);

        return $result;
    }

    public static function EditPost($id, $title, $content) {
        $query = "UPDATE posts SET post_title='$title', post_content='$content' post_date='".date('Y-m-d')."' WHERE post_id='$id'";
        $result = mysqli_query(self::Connect(), $query);

        return $result;
    }

    public static function RemovePost($id) {
        $query = "DELETE FROM posts WHERE post_id='$id'";
        $result = mysqli_query(self::Connect(), $query);

        return $result;
    }
}