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
    <link rel="stylesheet" href="css/style.css">
    <title>SPA-салон "Петрович"</title>
</head>

<body>
<?php 
  session_start();
  include_once 'php/user.php';
  include_once 'php/head.php'; 
?>
<main>
    <h1>TASK 14.8</h1>
    <?php
    /*
    $us = getUsersList(true);
    print_r($us);

    addUser('Vasya', 'mypassword');
    addUser('Petya', 'vasinpassword');

    $us = getUsersList(true);
    print_r($us);
    echo '<br>';

    var_dump(checkPassword('Petya', 'mypassword'));
    echo '<br>';
    var_dump(checkPassword('Petya', 'vasinpassword'));
    echo '<br>';
    changeUserPassword('Petya', 'mypassword');
    echo '<br>';
    var_dump(checkPassword('Petya', 'mypassword'));
    echo '<br>';
    $us = getUsersList(true);
    print_r($us);
    echo '<br>';
    exitUser();

    echo var_dump( getCurrentUser());
    echo '<br>';
    echo 'Login as Petya: ';
    //var_dump(loginUser('Petya', 'mypassword'));
    echo '<br>';
    echo var_dump( getCurrentUser());
    
    
    */
    ?>

</main>    
</body>

</html>