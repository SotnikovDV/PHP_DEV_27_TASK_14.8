<?php
/* -------------- обработка входа/выхода --------------- */

include_once 'user.php';

if (!empty($_REQUEST)) {
    // перенаправлено со страницы входа
    if (key_exists('login', $_POST)) {
        $login = $_POST['login'];
        if (key_exists('password', $_POST)) {
            $password = $_POST['password'];
            if (loginUser($login, $password)) {
                header('Location: /');
            }
        }
        die('Ошибка входа пользователя');
    } elseif (key_exists('logoff', $_REQUEST)) {
        logoffUser();
        header('Location: /');
    }    
}
die('Ошибка операции входа/выхода');
