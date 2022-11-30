<?php
// $arr=array(
//     1 => 2,
//     2=> 3,
// );
// $arr[1]=4;
// var_dump($arr);

// $newfunc = create_function('$a,$b', 'return "ln($a) + ln($b) = " . log($a * $b);');
// echo $newfunc(2, M_E) . "\n";

if(isset($_REQUEST['inc_id'])){
    $id=$_REQUEST['inc_id'];
    $_SESSION['quant'][$id] += 1;
}elseif(isset($_REQUEST['dec_id'])){
    $id=$_REQUEST['dec_id'];
    if($_SESSION['quant'][$id]>1){
        $_SESSION['quant'][$id] -= 1;
    }else{
        foreach($_SESSION['products'] as $key=>$value){
            if($value["product_id"]==$id){
                unset($_SESSION['products'][$key]);
                unset($_SESSION['quant'][$id]);  
                if(count($_SESSION['products'])==0){
                    unset($_SESSION['products']);
                }  
                if(count($_SESSION['quant'])==0){
                    unset($_SESSION['quant']);
                }
                break;
            }
        }
    }
}elseif(isset($_REQUEST['del_id'])){
    $id=$_REQUEST['del_id'];
    foreach($_SESSION['products'] as $key=>$value){
        if($value["product_id"]==$id){
            unset($_SESSION['products'][$key]);
            break;
        }
    }
    unset($_SESSION['quant'][$id]);  
    if(count($_SESSION['products'])==0){
        unset($_SESSION['products']);
    }  
    if(count($_SESSION['quant'])==0){
        unset($_SESSION['quant']);
    }  
}
header("location:../frontend/cart.php?pr=$product_id");
?>