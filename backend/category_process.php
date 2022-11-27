<?php

include("config.php");

$query = mysqli_query($mysqli, "SELECT * FROM `category`");

while($row = mysqli_fetch_assoc($query)){
    $result[] = $row;
}

if (!$result) {
    header("location:../frontend/error.php?err=no%20result");
}
?>