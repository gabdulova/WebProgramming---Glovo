<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("location: login.php");
}
if (!isset($_REQUEST["cg"])) {
    header("location: shop.php");
}

$catalogue = $_REQUEST["cg"];
include("../backend/products_process.php");
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
    <title><?php echo $catalogue_name[0]?></title>
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

        <div class="main-page-wrapper">
            <div class="main-page-content-wrapper">
                <div class="heading">
                    <h2><?php echo $catalogue_name[0]?> Positions</h2>
                </div>
                <div class="menu-container">
                    
                <?php
                foreach ($result as $row) {
                ?>
                    <div class="box">
                        <div class="box-img">
                            <a href=<?php echo "./product_id.php?pr=" . $row["product_id"] ?>>
                                <img src=<?php echo "./assets/img/" . $row["img_url"] ?> alt="">
                            </a>
                        </div>
                        <h2><?php echo $row["name"]?></h2>
                        <span><?php echo $row["price"] ?>₸</span>
                    </div>
                <?php
                    }
                ?>
                    
                </div>
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