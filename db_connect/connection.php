<?php
    $host = 'localhost'; // адрес сервера
    $database = 'v9061216_db'; // имя базы данных
    $user = 'v9061216_db'; // имя пользователя
    $password = '509912'; // пароль

    $link = mysqli_connect($host, $user, $password, $database)
    or die("Ошибка123 " . mysqli_error($link));
?>