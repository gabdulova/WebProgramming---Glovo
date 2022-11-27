<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("location: login.php");
}
if (!isset($_REQUEST["cr"])) {
    header("location: main.php");
}

$category = $_REQUEST["cr"];
include("../backend/shop_process.php");
// echo json_encode($result);
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

    <title>Fast Food</title>
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
                    <a class="header-logout" href="./7.html">Cart</a>
                </div>
                <div class="header-far-right">
                    <a  class="header-logout" href="../backend/logout_process.php">Log Out</a>
                </div>
            </div>
        </header>

        <div class="page-wrapper">
            <h1 class="page-text">
                Restaurants
            </h1>
            <div class="page-content-wrapper">

            <?php
                foreach ($result as $row) {
            ?>
                <a href="./catalogue.php?sh=<?php echo $row["shop_id"] ?>" class="page-link rectangle-link">
                    <div class="rectangle-link-background" style="background-image: url(./assets/img/<?php echo $row["img_url"]?>);">
                        <span class="page-rectangle-text"><?php echo $row["name"] ?></span>
                    </div>
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
                    <a href="./9.html" class="footer-text">
                        Survey
                    </a>
                </div>                
            </div>
        </footer>

    </div>
</body>
</html>