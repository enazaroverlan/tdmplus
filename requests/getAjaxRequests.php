<?php
/**
 * Created by PhpStorm.
 * User: Эрлан
 * Date: 15.07.2016
 * Time: 17:59
 */
header("Content-Type: Application/JSON");
$response = "";
switch($_REQUEST['action']) {
    case 'mailto':
            $name = $_REQUEST['name'];
            $email = $_REQUEST['email'];
            $subject = $_REQUEST['subject'];
            $mess = $_REQUEST['message'];
            $phone = $_REQUEST['phone'];

            $message = "Имя: $name \n" .
                "E-Mail: $email \n " .
                "Телефон: $phone \n " .
                "Тема: $subject \n " .
                "Сообщение: \n" .
                "$mess \n" .
                "Отправлено: ".date('d-m-Y');

            if(mail("tdmplus@hotmail.com", $subject, $message)) {
                $response = array('result' => 'success', 'response' => "Сообщение отправлено успешно");
            } else {
                $response = array('result' => 'failed', 'response' => "Не получилось отправить сообщение, неизвестная ошибка, пожалуйста, попробуйте позже");
            }
        break;
}

echo(json_encode($response));