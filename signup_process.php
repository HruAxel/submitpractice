<?php

session_start();

if (isset($_POST["submitted"])) {

    $name = $_POST["nick_name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $password_confirmation = $_POST["password_confirmation"];

    $errors = [];

    if(strlen($name) < 3 ) {
        $errors[] = 'A név túl rövid!';
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Helytelen email cím!';
    };

    if (strlen($password) <= 6) {
        $errors[] = 'A jelszó túl rövid!';
    }

    if($password_confirmation != $password) {
        $errors[] = 'A jelszavak nem eggyeznek!'; 
    }




    if (count($errors) === 0) {
        $_SESSION["succes"] = 'Sikeres regisztráció!';
    } else {
        $_SESSION["error"] = $errors;
    }


    if($_SESSION["succes"] == true) {
        header("location: /PROG/gyakiphp2/pages/signin_index.php");
    } else {
        header("location:".$_SERVER["HTTP_REFERER"]);
    }

    
};