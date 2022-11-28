<?php

include("config.php");

$query = mysqli_query($mysqli, "SELECT * FROM `product` WHERE `catalogue_id`=$catalogue");
$catalogue_name_query = mysqli_query($mysqli, "SELECT `name` FROM `catalogue` WHERE `catalogue_id`=$catalogue");
$catalogue_name = mysqli_fetch_row($catalogue_name_query);

while($row = mysqli_fetch_assoc($query)){
    $result[] = $row;
}

if (!$result || !$catalogue_name) {
    header("location:../frontend/error.php?err=no%20result");
}
?>