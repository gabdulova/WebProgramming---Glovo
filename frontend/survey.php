<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("location: login.php");
}
if(isset($_POST["q1"]) || isset($_POST["q2"]) || isset($_POST["q3"]) || isset($_POST["q4"]) || isset($_POST["q5"]) || isset($_POST["q6"]) || isset($_POST["q7"]) || isset($_POST["q8"])){
    include("../backend/survey_process.php");
    $res=true;
    $message="Thank you for taking the survey! It will help us to improve the quality of service!!";
}else{
    $res=false;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Take the survey</title>
    <link rel="stylesheet" href="./assets/style/main.css">
    <link rel="stylesheet" href="./assets/style/main_Aru.css">
    <link rel="icon" href="./assets/img/browser icon.png"> 
</head>
<body id="body-survey">
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

        <div class="block-survey-wrapper">
            <div class="survey-block">
                <h1>Take the survey and help Glovo become better!</h1>
            <?php if(!$res){?>
            <form class="survey-content" action="./survey.php" method="post">
                    <label for="q1">
                        1) How much do you rate the quality of product delivery?
                    </label> <br>
                    <input type="radio" id="q1" name="q1" value="1">1 <br>
				    <input type="radio" id="q1" name="q1" value="2">2 <br>
                    <input type="radio" id="q1" name="q1" value="3">3 <br>
				    <input type="radio" id="q1" name="q1" value="4">4 <br>
                    <input type="radio" id="q1" name="q1" value="5">5 <br>
                    <label for="q2">
                        2) What do you think would improve the quality of delivery?
                    </label> <br>
                    <textarea name="q2" id="q2" cols="60" rows="5"></textarea> <br>
                    <label for="q3">
                        3) How much do you rate the Glovo app?
                    </label> <br>
                    <input type="radio" id="q3" name="q3" value="1">1 <br>
				    <input type="radio" id="q3" name="q3" value="2">2 <br> 
                    <input type="radio" id="q3" name="q3" value="3">3 <br>
				    <input type="radio" id="q3" name="q3" value="4">4 <br>
                    <input type="radio" id="q3" name="q3" value="5">5 <br>
                    <label for="q4">
                        4) What do you think would improve the quality of service Glovo?
                    </label> <br>
                    <textarea name="q4" id="q4" cols="60" rows="5"></textarea> <br>
                    <label for="q5"> <br>
                        5) Have you ever used promo codes in Glovo?
                    </label> <br>
                        <input type="radio" id="q5" name="q5" value="yes">yes <br>
				        <input type="radio" id="q5" name="q5" value="no">no <br> 
                    <label for="q6">
                        6) Do you think they help make your purchase more pleasant?
                    </label> <br>
                    <input type="radio" id="q6" name="q6" value="yes">yes <br>
				    <input type="radio" id="q6" name="q6" value="no">no <br> 
                    <label for="q7">
                        7) How do you rate the idea of transferring bonuses at the expense of your orders and in the future you can use these bonuses?
                    </label> <br>
                    <input type="radio" id="q6" name="q6" value="yes">yes <br>
				    <input type="radio" id="q6" name="q6" value="no">no <br> 
                    <label for="q8">
                        8) How much do you appreciate the courtesy of our couriers?
                    </label> <br>
                    <input type="radio" id="q8" name="q8" value="1">1 <br>
				    <input type="radio" id="q8" name="q8" value="2">2 <br> 
                    <input type="radio" id="q8" name="q8" value="3">3 <br>
				    <input type="radio" id="q8" name="q8" value="4">4 <br>
                    <input type="radio" id="q8" name="q8" value="5">5 <br>
                    
                    <input class="button-submit-survey" type="submit" value="Send">
            </form>
            <?php }?>
            <?php if($res){
                echo "<h4>$message</h4>";
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
                    <a href="./survey.php" class="footer-text">
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