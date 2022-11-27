<?php

session_start();
include("config.php");

if (isset($_POST["submit"])) {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $query = mysqli_query($mysqli, "INSERT INTO `user`(`username`, `login`, `password`) VALUES ('$name','$email','$password')");

    if ($query) {
        header("location:../frontend/login.php");
    } else {
        header("location:../frontend/error.php?err=unsuccessful%20sign%20up");
    }
}

?>