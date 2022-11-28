<?php

include("config.php");

$query = mysqli_query($mysqli, "SELECT * FROM `catalogue` WHERE `shop_id`=$shop");
$shop_name_query = mysqli_query($mysqli, "SELECT `name` FROM `shop` WHERE `shop_id`=$shop");
$shop_name = mysqli_fetch_row($shop_name_query);

while($row = mysqli_fetch_assoc($query)){
    $result[] = $row;
}

if (!$result || !$shop_name) {
    header("location:../frontend/error.php?err=no%20result");
}
?>