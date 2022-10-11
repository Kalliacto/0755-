<?php
header('Content-Type: text/html; charset=utf-8');
session_start(); //Начало сессии
//Подключение к БД
$mysqli = mysqli_connect("localhost", "");
if ($mysqli == false) {
    print("Error");
} else {
    $inputValue = $_POST["value"]; //Обращаюсь к файлу lk и принятые данные с него методом  _POST и достаю ключ value
    $item = $_POST["item"]; //Обращаюсь к файлу lk и принятые данные с него методом  _POST и достаю ключ item
    $id = $_SESSION["id"]; //Обращаюсь к сесии и достаю ключ id

    $mysqli->query("UPDATE `users` SET `$item`='$inputValue' WHERE `id`='$id'");
    $_SESSION[$item] = $inputValue;
}
