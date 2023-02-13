<?php

include_once "connect.php";

$con = connectDB();
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM `crud` WHERE `crud`.`id` = $id";
    $res = mysqli_query($con, $sql);
    header("location:display.php");
} else {
    echo "not found";
}