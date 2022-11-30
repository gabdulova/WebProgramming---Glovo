<?php

include("config.php");
if(isset($_GET["id"])){
    $id=$_GET["id"];
    $query_shop = mysqli_query($mysqli, "SELECT s.name FROM `product` as p,`catalogue` as c,`shop` as s WHERE p.product_id=$id AND p.catalogue_id=c.catalogue_id AND c.shop_id=s.shop_id ;");
    while($row2 = mysqli_fetch_assoc($query_shop)){
        $shop_name[] = $row2;
    }
    $shop=$shop_name[0];
    if(isset($_GET['action']) && $_GET['action']=="add"){
        $id=$_GET['id']; 
        $query = mysqli_query($mysqli, "SELECT * FROM `product` WHERE `product_id`=$id");

        while($row = mysqli_fetch_assoc($query)){
            $result[] = $row;
        }
        if(!isset($_SESSION['cart'])){
            $_SESSION['cart']=array();
            
        }
        if(isset($_SESSION['cart'][$id])){
            $_SESSION['cart'][$id]['quant']++;
        }else{
            $_SESSION['cart'][$result[0]["product_id"]]=array(
                "id" => $result[0]["product_id"],
                "name" => $result[0]["name"],
                "price" => $result[0]["price"],
                "description" => $result[0]["description"],
                "img_url" => $result[0]["img_url"],
                "quant" => 1

            );
        }
        if (!$result) {
            header("location:../frontend/error.php?err=no%20result");
        }
    }elseif(isset($_GET['action']) && $_GET['action']=="inc") {
        if(isset($_SESSION['cart'][$id])){
            $_SESSION['cart'][$id]['quant']++;
        }else{
            $message="There is no such product in the cart with id $id";
        }
    }elseif(isset($_GET['action']) && $_GET['action']=="dec"){
        if(isset($_SESSION['cart'][$id])){
            if($_SESSION['cart'][$id]['quant']>1){
                $_SESSION['cart'][$id]['quant']--;
            }else{
                unset($_SESSION['cart'][$id]);
            }
        }else{
            $message="There is no such product in the cart with id $id";
        }
    }elseif(isset($_GET['action']) && $_GET['action']=="del"){
        if(isset($_SESSION['cart'][$id])){
            unset($_SESSION['cart'][$id]);
        }else{
            $message="There is no such product in the cart with id $id";
        }
    }
    

    
}
if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0){
    foreach($_SESSION['cart'] as $key => $value){
        $id=$value["id"];
    }
    $query_shop = mysqli_query($mysqli, "SELECT s.name FROM `product` as p,`catalogue` as c,`shop` as s WHERE p.product_id=$id AND p.catalogue_id=c.catalogue_id AND c.shop_id=s.shop_id ;");
    while($row2 = mysqli_fetch_assoc($query_shop)){
        $shop_name[] = $row2;
    }

    $cart=$_SESSION['cart'];
    $total_price=0;
    foreach($cart as $key => $value){
        $q=intval($value['quant']);
        $p=intval($value['price']);
        $total_price+= $q*$p;
    }
    $shop=$shop_name[0];
}


?>