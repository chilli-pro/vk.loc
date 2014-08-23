<?php

$dbhost = "localhost"; // Имя хоста БД
$dbusername = "root"; // Пользователь БД
$dbpass = ""; // Пароль к базе
$dbname = "mysitebd"; // Имя базы

$dbconnect = mysql_connect ($dbhost, $dbusername, $dbpass);
if (!$dbconnect) { echo ("Не могу подключиться к серверу базы данных!"); }

if(@mysql_select_db($dbname)) { echo "Подключение к базе $dbname установлено!"; }
else die ("Не могу подключиться к базе данных $dbname!");

?>