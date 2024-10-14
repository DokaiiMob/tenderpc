<?php
// Параметры подключения к базе данных
$host = 'localhost';
$user = '';
$pass = '';
$dbname = '';

// Создание соединения
$conn = new mysqli($host, $user, $pass, $dbname);

// Проверка соединения
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

// Установка кодировки
$conn->set_charset("utf8");
?>
