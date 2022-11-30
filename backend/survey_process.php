<?php

include("config.php");
if(isset($_POST["q1"]) || isset($_POST["q2"]) || isset($_POST["q3"]) || isset($_POST["q4"]) || isset($_POST["q5"]) || isset($_POST["q6"]) || isset($_POST["q7"]) || isset($_POST["q8"])){
    if(!isset($_SESSION['survey'])){
        $_SESSION['survey']=array();
    }
    $_SESSION['survey'][]=array(
        "quality"=>$_POST["q1"],
        "quality_advice"=>$_POST["q2"],
        "rate"=>$_POST["q3"],
        "service_advice"=>$_POST["q4"],
        "promo_code"=>$_POST["q5"],
        "promo_code_help"=>$_POST["q6"],
        "bonus_rate"=>$_POST["q7"],
        "cour"=>$_POST["q8"]
    );

}

?>