<?php 

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/PROG/gyakiphp2/styles/style.css">
    <script src="/PROG/gyakiphp2/scripts/jquery-3.7.0.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="main">
       
        <div class="area_two">


            <form action="signup_process.php" method="post" class="sign_up_area">

                <h2>Regisztráció</h2>

                <?php
                if (isset($_SESSION["error"])) {
                    foreach ($_SESSION["error"] as $err)
                        print "<li class=\"error\">{$err}</li>";

                    unset($_SESSION["error"]);
                } elseif (isset($_SESSION["succes"])) {
                    print "<li class=\"success\">{$_SESSION["succes"]}</li>";

                    unset($_SESSION["succes"]);
                }
                ?>

                <input type="text" name="nick_name" placeholder="Felhasználó név">
                <input type="email" name="email" id="" placeholder="E-mail">
                <input type="password" name="password" id="" placeholder="Jelszó">
                <input type="password" name="password_confirmation" id="" placeholder="Jelszó mégegyszer">

                <button id="btn" type="submit" name="submitted" value="ok">Regisztráció</button>

            </form>
        </div>
    </div>

    <script src=""></script>

</body>

</html>