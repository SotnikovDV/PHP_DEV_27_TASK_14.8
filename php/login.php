<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <title>Вход в SPA-салон "Петрович"</title>
</head>

<body>
    <?php
    session_start();
    include_once '/php/head.php';
    include_once '/php/user.php';
    ?>
    <main>
        <form action="auth.php" method="post" class="login-form">
            <label for="login">Имя пользователя:</label>
            <input name="login" type="text" placeholder="Логин">
            <label for="password">Пароль:</label>
            <input name="password" type="password" placeholder="Пароль">
            <input name="submit" type="submit" value="Войти">
            <input name="button" type="button" value="Отмена">
        </form>
</body>

</html>