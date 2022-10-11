<?php
header('Content-Type: text/html; charset=utf-8');
//Подключение к БД
$mysqli = mysqli_connect("localhost", "");
if ($mysqli == false) {
    print("Error");
} else {
    //Получаем данные
    $name = $_POST["name"];
    $lastname = $_POST["lastname"];
    $email = trim(mb_strtolower($_POST["email"])); //mb_strtolower Привели к нижнему регистру email,trim защитились от лишних пробелов
    $pass = trim($_POST["pass"]);
    $pass = password_hash($pass, PASSWORD_DEFAULT);
    //Работаем с данными
    $result = $mysqli->query("SELECT * FROM `users` WHERE `email`='$email'");
    //Проверяем есть ли такие строки и что-то делаем
    if ($result->num_rows !== 0) {
        print("Такой пользователь уже существует!");
    } else {
        $mysqli->query("INSERT INTO `users`(`name`, `lastname`, `email`, `pass`) VALUES ('$name', '$lastname', '$email' , '$pass')");
        print("ok");
    }
}
