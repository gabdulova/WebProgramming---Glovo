<?php
session_start();
include("../backend/config.php");
if (!isset($_SESSION["login"])) {
    header("location: login.php");
}
$message="";
    if(isset($_GET['order_id']) && isset($_GET['user_id'])){
        if($_GET['order_id']==-1){
            $message="You need to choose product to order!";
        }else{
            $a=$_GET['order_id'];
            $b=$_GET['user_id'];
            $query = mysqli_query($mysqli, "INSERT INTO `order`(order_id, user_id, product_id) VALUES (null,$b,$a)");
            if ($query) {
                unset($_SESSION['cart']);
                header("location:./main.php");
            } else {
                header("location:./error.php?err=unsuccessful%20sign%20up");
            }
        }
    
    }


include("../backend/cart_process.php");
if(isset($_SESSION['cart']) && count($_SESSION['cart'])==0){
    $total_price=0;
}
$user_id=$_SESSION['login'];
if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0){
    foreach($_SESSION['cart'] as $k=>$v){
        $order_id=$v['id'];
        break;
    }
}else{
    $order_id=-1;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style/main_Aru.css">
    <link rel="stylesheet" href="./assets/style/main.css">
    <link rel="icon" href="./assets/img/browser icon.png"> 
    <title>Form</title>
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
        <div class="form-block-wrapper">
            <div class="form-block">
            <form class="form-block-content"  method="post" action="./2.html">
                <label class="input-item1" for="name">Name:</label> <br>
                <input class="input-item2" type="text" name="name" id="name"> <br>
                <label class="input-item1" for="surname">Surname:</label> <br>
                <input class="input-item2" type="text" name="surname" id="surname"> <br>
                <label class="input-item1" for="address">Address:</label> <br>
                <input class="input-item2" type="text" name="address" id="address"> <br>
                <label class="input-item1" for="home-number">Home Number:</label> <br>
                <input class="input-item2" type="text" name="home-number" id="home-number"> <br>
                <label class="input-item1" for="cardnumber">Card Number:</label> <br>
                <input class="input-item2" type="text" name="cardnumber" id="cardnumber"> <br>
                <label class="input-item1" for="info">Specify information about allergies:</label><br>
                <textarea class="input-item2" class="input-item" name="info" id="info" cols="20" rows="5"></textarea> <br> 
                
            </form>
        </div>
        <div class="summary-block">
            <img src="./assets/img/cart_confirm_photo1.png" alt="" style="float:right; width:70px">
            <h2>Summary information</h2>
            
            <?php
                if(isset($_SESSION['cart'])){
                    foreach ($_SESSION['cart'] as $key=>$value) {
                        $p_id=$value['id'];
                        $name=$value["name"];
                        $price=$value["price"];
                        $desc=$value["description"];
                        $q=$value["quant"];
                
            ?>
            <div class="summary-product-content">
            
                    <div class="summary-product-block edit">
                        <a href=<?php echo "./order.php?id=$p_id&action=dec"?>>
                        <button class="button-edit" type="button">-</button>
                        </a>
                        <?php 
                        echo "<p>$q</p>"
                        ?>
                        <a href=<?php echo "./order.php?id=$p_id&action=inc"?>>
                        <button class="button-edit" type="button">+</button>
                        </a>
                    </div>
                    <div class="summary-product-block">
                    <?php echo"<p>$name</p>" ?>
                    </div>
                    <div class="summary-product-block">
                    <?php echo"<p>$price</p>"?>
                    </div>
                </div>
                <?php
                    }
                }else{
                    $total_price=0;
                }
                ?>
                <div>
                    <h4>
                        <?php echo"Total: $total_price ₸" ?>
                    </h4>
                </div>
                <form action=<?php echo"./order.php?order_id=$order_id&user_id=$user_id"?> method="POST">
                    <input class="button-confirm" type="submit" value="Confirm the order">
                </form>
                <?php echo "<p style='color:red;'>$message</p>"?>

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