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

    <title>Login Page</title>
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
                <form action="../backend/login_process.php" method="post" class="login-form-content">
                    <div class="login-form-item1">
                        <h2>
                            SIGN IN TO YOUR ACCOUNT
                        </h2>
                    </div>
                    <input class="login-form-item2 login-form-input" type="email" name="email" class="login-form-input" placeholder="Enter your email">
                    <input class="login-form-item3 login-form-input" type="password" name="password" class="login-form-input" placeholder="Enter your password">
                    <button class="login-form-item4" type="submit" name="submit">
                        SIGN IN
                    </button>
                    <div class="login-form-item5">
                        <a class="login-form-link" href="./registration.php">Create New Account</a>
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
                    <a href="./10.html" class="footer-text">
                        FAQ
                    </a>
                </div>
                <div class="footer-content footer-right">
                    <a href="./survey.php" class="footer-text">
                        Survey
                    </a>
                </div>                
            </div>
        </footer>

    </div>
</body>
</html>