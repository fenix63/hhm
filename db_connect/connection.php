<?php
    $host = 'mysql.hostinger.ru'; // адрес сервера
    $database = 'u653721317_test'; // имя базы данных
    $user = 'u653721317_user'; // имя пользователя
    $password = '509912'; // пароль

    $link = mysqli_connect($host, $user, $password, $database)
    or die("Ошибка " . mysqli_error($link));
?>