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
        <div class="area_one">


            <form action="signin_process.php" method="post" class="sign_in_area">

                <h2>Bejelentkezés</h2>
                <?php
                if (isset($_SESSION["errors"])) {
                    foreach ($_SESSION["errors"] as $err)
                        print "<li class=\"error\">{$err}</li>";

                    unset($_SESSION["errors"]);
                } elseif (isset($_SESSION["success"])) {
                    print "<li class=\"success\">{$_SESSION["success"]}</li>";

                    unset($_SESSION["success"]);
                }
                ?>

                <input type="email" name="email" id="" placeholder="E-mail">
                <input type="password" name="password" id="" placeholder="Jelszó">

                <button id="btn" type="submit" name="submitted" value="ok">Bejelentkezés</button>

            </form>

        </div>
    </div>
</body>

<script src="/PROG/gyakiphp2/scripts/script_signin.js"></script>

</html>