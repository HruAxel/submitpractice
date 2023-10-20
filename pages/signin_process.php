<?php

session_start();

if (isset($_POST["submitted"])) {

    $email = $_POST["email"];
    $password = $_POST["password"];

    $errors = [];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Helytelen email cím!';
    };

    if (strlen($password) <= 6) {
        $errors[] = 'A jelszó túl rövid!';
    }




    if (count($errors) === 0) {
        $_SESSION["success"] = 'Sikeres bejelentkezés!';
    } else {
        $_SESSION["errors"] = $errors;
    }

    header("location:".$_SERVER["HTTP_REFERER"]);

    
};
