<?php

require_once 'config.php';
session_start();

// возвращает массив - список пользователей
function getUsersList($reload)
{

    if (!key_exists('users', $_SESSION)) {
        return [];
    }
    if ($_SESSION['users'] && !$reload) {
        $users = $_SESSION['users'];
    } else {
        if (file_exists(Config::userDataFilePath())) {
            $json = file_get_contents(Config::userDataFilePath());
            $users = json_decode($json, true);
        } else {
            $users = [];
        }
        $_SESSION['users'] = $users;
    }
    return $users;
}

// сохранение списка пользователей
function saveUsersList()
{
    $users = getUsersList(false);
    $json = json_encode($users);
    file_put_contents(Config::userDataFilePath(), $json);
}

// проверяет, существует ли пользователь с указанным логином
function existsUser($login)
{
    $users = getUsersList(false);
    return key_exists($login, $users);
}

// возвращает true тогда, когда существует пользователь 
//с указанным логином и введенный им пароль прошел проверку, иначе — false
function checkPassword($login, $password)
{
    $users = getUsersList(false);
    if (!$users) {
        return false;
    }
    $userPassword = $users[$login];
    if (!$userPassword) {
        return false;
    }
    $checkPasswHash = sha1($password);
    return $userPassword === $checkPasswHash;
}

// добавление пользователя
function addUser($login, $password)
{
    $users = getUsersList(false);
    $userExists = existsUser($login);
    $users[$login] = sha1($password);
    $_SESSION['users'] = $users;
    // если такого пользователя не было ранее - сохраним его в файл
    if (!$userExists) {
        saveUsersList();
    }
    return true;
}

// изменение пароля пользователем
function changeUserPassword($login, $newPassword)
{
    $users = getUsersList(false);
    $userExists = existsUser($login);
    if (!$userExists) {
        return false;
    }
    $users[$login] = sha1($newPassword);
    $_SESSION['users'] = $users;
    // сохраним его в файл
    saveUsersList();
    return true;
}

// авторизация пользователя
// возвращает: true-успешно, false-не успешно
function loginUser($login, $password)
{
    $users = getUsersList(false);
    $userExists = existsUser($login);
    if (!$userExists) {
        return false;
    }
    if (sha1($password) === $users[$login]) {
        $_SESSION['user_login'] = $login;
        return true;
    } else {
        return false;
    }
}

// разавторизация пользователя
function logoffUser()
{
    unset($_SESSION['user_login']);
}

// возвращает либо имя вошедшего на сайт пользователя, либо null
function getCurrentUser()
{
    if (!key_exists('user_login', $_SESSION)) {
        return false;
    }
    if (!$_SESSION['user_login']) {
        return null;
    } else {
        $login = $_SESSION['user_login'];
        return $login;
    }
}
