<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("location: login.php");
}

include("../backend/category_process.php");
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

    <title>Main Page</title>
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
                <div class="header-center">
                    <input class="header-search" type="text" placeholder="Search...">
                </div>
                <div class="header-right">
                    <a class="header-logout" href="./cart.php">Cart</a>
                </div>
                <div class="header-far-right">
                    <a  class="header-logout" href="../backend/logout_process.php">Log Out</a>
                </div>
            </div>
        </header>

        <div class="page-wrapper">
            <h1 class="page-text">
                Categories
            </h1>
            <div class="page-content-wrapper">

            <?php
                foreach ($result as $row) {
            ?>
                <a href=<?php echo "./shop.php?cr=" . $row["category_id"] ?> class="page-link circle-link">
                    <img class="page-circle-icon" src="./assets/img/<?php echo $row["img_url"] ?>" alt="Fast food">
                    <span class="page-circle-text"><?php echo $row["name"] ?></span>
                </a>
            <?php
                }
            ?>
            </div>
        </div>

        <footer>
            <div id="footer-wrapper">
                <div class="footer-content footer-left">
                    <a href="#header-wrapper">
                        <img src="./assets/img/glovo-white.svg" alt="Glovo Logo White">
                    </a>
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

