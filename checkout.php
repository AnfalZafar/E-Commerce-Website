<?php
include("connection.php");
session_start();

$get = $_GET["order"];
$insert = "INSERT INTO `orders`(`order_name`, `order_price`) VALUES ('anfal','$get')";
$run = mysqli_query($connect , $insert);
if($run){
    header("location:product.html");
}


?>