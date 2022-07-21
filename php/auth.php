<?php
/* -------------- обработка входа/выхода --------------- */

session_start();

require_once 'user.php';


if (!empty($_REQUEST)) {
    // вызов со страницы регистрации
    if (key_exists('register', $_POST)) {
        if (key_exists('login', $_POST)) {
            $login = $_POST['login'];
            if (key_exists('password', $_POST)) {
                $password = $_POST['password'];
                echo 'start addUser<br>';
                // добавляем пользователя
                if (addUser($login, $password)) {
                    echo 'Register success<br>';
                    // и сразу логинимся
                    if (loginUser($login, $password)) {
                        echo 'Login success<br>';
                        header('Location: /');
                    }
                }
            }
            die('Ошибка регистрации  пользователя');
        }    
        die('Ошибка регистрации  пользователя');
    }    
    // вызов со страницы входа
    elseif (key_exists('login', $_POST)) {
        $login = $_POST['login'];
        if (key_exists('password', $_POST)) {
            $password = $_POST['password'];
            echo 'start login<br>';
            // делаем логин
            if (loginUser($login, $password)) {
                echo 'Login success<br>';
                header('Location: /');
            } else {
                // неудача
                // проверяем: есть ли такой пользователь?
                if (existsUser($login)) {
                    // если есть - говорим ему, что неправильный пароль
                    header('Location: login.php?error');
                } else {
                    // если нет - отправляем на регистрацию
                    header('Location: register.php?login='.$login);
                }
            }
        }
        die('Ошибка входа пользователя');
    }    
    // выход пользователя
    elseif (key_exists('logoff', $_REQUEST)) {
        echo 'start logoff<br>';
        logoffUser();
        
        header('Location: /');
    }    
}
die('Ошибка операции входа/выхода');
