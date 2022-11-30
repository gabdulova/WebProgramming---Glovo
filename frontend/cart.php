<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("location: login.php");
}
include("../backend/cart_process.php");
if((isset($_SESSION['cart']) && count($_SESSION['cart'])==0)||(!isset($_SESSION['cart']))){
    $total_price=0;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cart</title>
    <link rel="stylesheet" href="assets/style/main_Aru.css">
    <link rel="stylesheet" href="./assets/style/main.css">
    <link rel="icon" href="./assets/img/browser icon.png"> 
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
                <div class="header-far-right">
                    <a  class="header-logout" href="../backend/logout_process.php">Log Out</a>
                </div>
            </div>
        </header>
        <div class="page-cart-wrapper">
            <div class="heading-wrapper">
                <h2> <a href="./main.php"><img src="./assets/img/go_back_photo.png" alt="" width="20px"></a> Information about order</h2>
                <h1>
                <?php 
                if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0){
                    echo $shop["name"];
                }else{
                    echo "There is no added products...";
                }
                ?>
                </h1>
            </div>
            <div class="cart-wrapper">
                <ul>
                <?php
                if(isset($_SESSION['cart']) && isset($_SESSION['cart'])){
                    foreach ($_SESSION['cart'] as $key=>$value) {
                        $p_id=$value['id'];
                
                ?>
                    <li>
                        <div class="cart_block">
                            
                            <a href=<?php echo "./cart.php?id=$p_id&action=del"?>>
                            <button class="button-delete" type="button">X</button>
                            </a>
                                <img class="cart-image" src="<?php echo "./assets/img/".$value["img_url"]?>" alt="photo of burger" >
                            <?php
                            $name=$value["name"];
                            $price=$value["price"];
                            $desc=$value["description"];
                            $q=$value["quant"];
                            echo "<h3>$name</h3>";
                            echo "<p>$price</p>";
                            echo "<p>$desc</p>";
                            ?>
                            <div class="edit">
                                <a href=<?php echo "./cart.php?id=$p_id&action=dec"?>>
                                <button class="button-edit" type="button">-</button>
                                </a>
                                <?php 
                                echo "<p>$q</p>"
                                ?>
                                <a href=<?php echo "./cart.php?id=$p_id&action=inc"?>>
                                <button class="button-edit" type="button">+</button>
                                </a>
                            </div>
                    
                        </div>
                    </li>
                    <?php
                    }
                    }
                    ?>
                </ul>
                <div>
                    <form class="form-order" action="./order.php">
                        <button type="submit" class="button-order" ><?php echo "Order products for $total_price ₸"?></button>
                    </form>
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

    
</body>
</html>