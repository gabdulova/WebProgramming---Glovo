<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("location: login.php");
}
if (!isset($_REQUEST["pr"])) {
    header("location: shop.php");
}

$product_id = $_REQUEST["pr"];
include("../backend/product_description_process.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./assets/img/browser icon.png">
    <link rel="stylesheet" href="./assets/style/main.css">
    <link rel="stylesheet" href="./assets/style/main_Binaz.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title><?php echo $result[0]["name"] ?></title>
</head>
<div>
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

        <div class="box2">
            <div class="img">
                <a href=<?php echo "./product_id.php?pr=" . $product_id ?>>
                    <img src=<?php echo "./assets/img/" . $result[0]["img_url"] ?> alt="">
                </a>
            </div>
            <div class="content">
                <h2><?php echo $result[0]["name"] ?></h2>
                <span><?php echo $result[0]["price"] ?>₸</span>
                <a href=<?php echo "./cart.php?id=$product_id&action=add"?> class="btn"><i class='bx bx-cart-add'></i></a>
                <p><?php echo $result[0]["description"] ?></p>
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