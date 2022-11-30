<?php
session_start();
if (isset($_SESSION["login"])) {
    header("location: main.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="./assets/img/browser icon.png">
    <link rel="stylesheet" href="./assets/style/main.css">
    <link rel="stylesheet" href="./assets/style/main_Yera.css">

    <title>Register Page</title>
</head>
<body>
    <div class="wrapper">
        <header>
            <div id="header-wrapper">
                <div class="header-left">
                    <a href="./main.php">
                        <img id="header-logo" src="./assets/img/logo_green.png" alt="Glovo Logo Green" >
                    </a>
                </div>
            </div>
        </header>
         
        <div class="login-form">
            <div class="login-form-wrapper">
                <form action="../backend/registration_process.php" method="post" class="register-form-content">
                    <div class="login-form-item1">
                        <h2>
                            SIGN UP
                        </h2>
                    </div>
                    <input class="register-form-item2 login-form-input" type="text" name="name" class="login-form-input" placeholder="Enter your name">
                    <input class="register-form-item3 login-form-input" type="email" name="email" placeholder="Enter your email">
                    <input class="register-form-item4 login-form-input" type="password" name="password" placeholder="Enter your password">
                    <button class="register-form-item5" type="submit" name="submit">
                        CREATE ACCOUNT
                    </button>
                    <div class="register-form-item6">
                        <a class="login-form-link" href="./login.php">Already have an account?</a>
                    </div>
                </form>
            </div>
        </div>

        <footer>
            <div id="footer-wrapper">
                <div class="footer-content footer-left">
                    <img src="./assets/img/glovo-white.svg" alt="Glovo Logo White">
                </div>
                <div class="footer-content footer-center">
                    <a href="./survey.php" class="footer-text">
                        FAQ
                    </a>
                </div>
                <div class="footer-content footer-right">
                    <a href="./9.html" class="footer-text">
                        Survey
                    </a>
                </div>                
            </div>
        </footer>

    </div>
</body>
</html>