<?php

// данные для подключения к базе данных
$server = "internetMagazin.local";

$username = "root";

$password = "";

$dbname = "mz";

// ПОДКЛЮЧЕНИЕ К БАЗЕ ДАННЫХ chat
$connect = mysqli_connect($server, $username, $password, $dbname);
// кодировка базы данных для кириллицы
mysqli_set_charset($connect, 'utf8');


?>