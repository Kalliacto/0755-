<?php
header('Content-Type: text/html; charset=utf-8');
session_start();

$mysqli = mysqli_connect("localhost", "");

if ($mysqli == false) {
    print("error");
} else {
    $email = trim(mb_strtolower($_POST["email"]));
    $pass = trim($_POST["pass"]);

    $result = $mysqli->query("SELECT * FROM `users` WHERE `email`='$email'");
    $result = $result->fetch_assoc();

    //var_dump($result["pass"]);

    if (password_verify($pass, $result["pass"])) {
        echo "ok";
        $_SESSION["name"] = $result["name"];
        $_SESSION["lastname"] = $result["lastname"];
        $_SESSION["email"] = $result["email"];
        $_SESSION["id"] = $result["id"];
    } else {
        echo "user-not-found";
    }
}

// <?php
// header('Content-Type: text/html; charset=utf-8');
// session_start(); //Запуск сессии

// $mysqli = mysqli_connect("localhost", "plxgonmk_0755", "0755", "plxgonmk_0755");

// if ($mysqli == false) {
//     print("Error");
// } else {
//     //Получаем данные
//     $email = trim(mb_strtolower($_POST["email"]));
//     $pass = trim($_POST["pass"]);

//     $result = $mysqli->query("SELECT * FROM `users` WHERE `email`='$email' --AND `pass`='$pass'");
//     $result = $result->fetch_assoc();

//     // var_dump($result["pass"]);

//     if (password_verify($pass, $result["pass"])) {
//         echo "ok";
//         $_SESSION["name"] = $result["name"];
//         $_SESSION["lastname"] = $result["lastname"];
//         $_SESSION["email"] = $result["email"];
//         $_SESSION["id"] = $result["id"];
//     } else {
//         echo "user-not-found";
//     }
// }
//     if ($result->num_rows !== 0) {
//         $mysqli->query("INSERT INTO `users`(`email`, `pass`) VALUES ('$email' , '$pass')");
//         print("ok");
//     } else {
//         print("Такого пользователя не существует!");
//     }
// }
